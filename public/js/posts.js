
document.addEventListener('DOMContentLoaded', function () {

  const sidebarToggle = document.getElementById('sidebar-toggle');
  const leftSidebar = document.getElementById('left-sidebar');
  const sidebarBackdrop = document.getElementById('sidebar-backdrop');

  if (sidebarToggle) {
    sidebarToggle.addEventListener('click', function () {
      leftSidebar.classList.toggle('-translate-x-full');
      sidebarBackdrop.classList.toggle('hidden');
    });
  }

  if (sidebarBackdrop) {
    sidebarBackdrop.addEventListener('click', function () {
      leftSidebar.classList.add('-translate-x-full');
      sidebarBackdrop.classList.add('hidden');
    });
  }

  const filterBtn = document.getElementById('filter-dropdown-btn');
  const filterDropdown = document.getElementById('filter-dropdown');

  if (filterBtn) {
    filterBtn.addEventListener('click', function () {
      filterDropdown.classList.toggle('hidden');
    });

    document.addEventListener('click', function (event) {
      if (!filterBtn.contains(event.target) && !filterDropdown.contains(event.target)) {
        filterDropdown.classList.add('hidden');
      }
    });
  }

  const filterBtns = document.querySelectorAll('.filter-btn');
  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      filterBtns.forEach(b => b.classList.remove('active', 'bg-white'));
      this.classList.add('active', 'bg-white');
    });
  });

  const requestsToggle = document.getElementById('requestsToggle');
  const requestsPanel = document.getElementById('requestsPanel');
  const overlay = document.getElementById('overlay');
  const closeBtn = document.getElementById('closePanelBtn');

  if (requestsToggle) {
    requestsToggle.addEventListener('click', function () {
      requestsPanel.classList.add('open');
      overlay.classList.remove('hidden');
      overlay.classList.add('visible');
    });
  }

  function closePanel() {
    requestsPanel.classList.remove('open');
    overlay.classList.remove('visible');
    overlay.classList.add('hidden');
  }
  if (closeBtn) closeBtn.addEventListener('click', closePanel);
  if (overlay) overlay.addEventListener('click', closePanel);

  fetch('/requests')
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      console.log('Requests data:', data);

      const requestsContainer = document.querySelector('.requests-container');

      if (requestsContainer) {
        requestsContainer.innerHTML = ''; 

        if (!data || data.length === 0) {
          const emptyState = document.getElementById('emptyState');
          if (emptyState) emptyState.classList.remove('hidden');
          return;
        }

        const emptyState = document.getElementById('emptyState');
        if (emptyState) emptyState.classList.add('hidden');

        const countEl = document.getElementById('requestCount');
        if (countEl) countEl.textContent = data.length;

        data.forEach(function (request) {
          const requestItem = document.createElement('div');
          requestItem.classList.add('request-item', 'flex', 'items-center', 'justify-between', 'p-4', 'border', 'border-gray-100', 'rounded-xl', 'bg-white', 'shadow-sm', 'hover:border-indigo-200', 'transition-colors');

          const createdDate = new Date(request.created_at);
          const formattedDate = createdDate.toLocaleDateString();

          requestItem.innerHTML =
            '<div class="flex items-center space-x-3">' +
            '<div class="relative">' +
            '<img src="/images/designer.png" alt="' + (request.sender_name || 'User') + '" class="w-12 h-12 rounded-full border-2 border-white object-cover">' +
            '</div>' +
            '<div>' +
            '<p class="font-medium text-gray-800">' + (request.sender_name || 'User #' + request.sender_id) + '</p>' +
            '<div class="flex items-center space-x-2">' +
            '<span class="text-xs text-gray-500">' + (request.sender_title || 'No title') + '</span>' +
            '<span class="mx-1">•</span>' +
            '<span class="text-xs text-gray-500">' + formattedDate + '</span>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="flex items-center space-x-4">' +
            '<button class="action-button p-2 bg-green-50 text-green-600 rounded-full hover:bg-green-100 transition-colors" data-action="accept" data-id="' + request.id + '">' +
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">' +
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />' +
            '</svg>' +
            '</button>' +
            '<button class="action-button p-2 bg-red-50 text-red-600 rounded-full hover:bg-red-100 transition-colors" data-action="reject" data-id="' + request.id + '">' +
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">' +
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />' +
            '</svg>' +
            '</button>' +
            '</div>';

          requestsContainer.appendChild(requestItem);
        });
      } else {
        console.error('Requests container not found');
      }
    })
    .catch(function (error) {
      console.error('Error fetching requests:', error);

      const requestsContainer = document.querySelector('.requests-container');
      if (requestsContainer) {
        requestsContainer.innerHTML = '<div class="text-center py-4 text-red-500">Failed to load requests. Please try again later.</div>';
      }
    });

  document.addEventListener('click', function (e) {
    const actionButton = e.target.closest('.action-button');
    if (!actionButton) return;

    const action = actionButton.dataset.action;
    const requestId = actionButton.dataset.id;
    const requestItem = actionButton.closest('.request-item');

    const status = action === 'accept' ? 'accepted' : 'declined';

    requestItem.style.opacity = '0.5';

    let endpoint;
if (action === 'accept') {
endpoint = `/requests/${requestId}/accept`;
} else {
endpoint = `/requests/${requestId}/reject`;
}

fetch(endpoint, {
method: 'POST',
headers: {
'Content-Type': 'application/json',
'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
      },
      body: JSON.stringify({ status: status })
    })
      .then(response => {
        console.log('Response status:', response.status);

        const clonedResponse = response.clone();
        clonedResponse.text().then(text => {
          console.log('Raw response:', text);
        });

        if (!response.ok) {
          throw new Error(`Server responded with status: ${response.status}`);
        }

        return response.json();
      })
      .then(data => {
        console.log('Success data:', data);

        requestItem.style.opacity = '0';
        requestItem.style.transform = 'translateX(100%)';
        requestItem.style.transition = 'all 300ms';

        setTimeout(() => {
          requestItem.remove();

          const count = document.querySelectorAll('.request-item').length;
          const countEl = document.getElementById('requestCount');
          if (countEl) countEl.textContent = count;

          const emptyState = document.getElementById('emptyState');
          if (emptyState && count === 0) {
            emptyState.classList.remove('hidden');
          }

          showNotification(
            action === 'accept'
              ? 'Request accepted successfully!'
              : 'Request declined',
            action === 'accept' ? 'success' : 'info'
          );
        }, 300);
      })
      .catch(error => {
        console.error('Error updating request:', error);
        console.error('Error details:', error.message);
        requestItem.style.opacity = '1';
        showNotification('Failed to update request. Please try again.', 'error');
      });
  });

  function showNotification(message, type = 'info') {
    const notification = document.createElement('div');

    let bgColor, textColor, icon;
    switch (type) {
      case 'success':
        bgColor = 'bg-green-50';
        textColor = 'text-green-800';
        icon = '<svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>';
        break;
      case 'error':
        bgColor = 'bg-red-50';
        textColor = 'text-red-800';
        icon = '<svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 10-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>';
        break;
      default:
        bgColor = 'bg-blue-50';
        textColor = 'text-blue-800';
        icon = '<svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>';
    }

    notification.className = `fixed bottom-4 right-4 flex items-center p-4 rounded-lg shadow-lg ${bgColor} ${textColor} transform translate-y-0 opacity-100 transition-all duration-500 z-50`;

    notification.innerHTML = `
    <div class="flex-shrink-0 mr-3">
        ${icon}
    </div>
    <div class="flex-1 text-sm font-medium">
        ${message}
    </div>
    <button class="ml-4 text-gray-400 hover:text-gray-500 focus:outline-none">
        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </svg>
    </button>
`;

    document.body.appendChild(notification);

    notification.querySelector('button').addEventListener('click', () => {
      notification.classList.add('opacity-0', 'translate-y-2');
      setTimeout(() => notification.remove(), 500);
    });

    setTimeout(() => {
      notification.classList.add('opacity-0', 'translate-y-2');
      setTimeout(() => notification.remove(), 500);
    }, 3000);
  }
});



document.addEventListener('click', function(e) {
if (e.target.closest('.send-request-btn')) {
const button = e.target.closest('.send-request-btn');
const postId = button.dataset.postId;

button.disabled = true;
button.classList.add('opacity-75');
button.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-2"></i>Sending...';

const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

console.log('Sending request for post ID:', postId);
console.log('CSRF Token present:', !!csrfToken);

fetch('/sendRequest', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
    'X-CSRF-TOKEN': csrfToken || '',
    'Accept': 'application/json'
  },
  body: JSON.stringify({
    post_id: postId
  })
})
.then(response => {
  console.log('Response status:', response.status);
  console.log('Response headers:', [...response.headers.entries()]);
  
  const clonedResponse = response.clone();
  clonedResponse.text().then(text => {
    console.log('Raw response body:', text);
    
    try {
      const jsonData = JSON.parse(text);
      console.log('Parsed JSON response:', jsonData);
    } catch (e) {
      console.log('Response is not valid JSON');
    }
  });
  
  if (!response.ok) {
    throw new Error(`Server responded with status: ${response.status}`);
  }
  
  return response.json();
})
.then(data => {
  console.log('Success data:', data);
  
  if (data.success) {
    button.classList.remove('bg-indigo-600', 'hover:bg-indigo-700');
    button.classList.add('bg-green-600', 'hover:bg-green-700');
    button.innerHTML = '<i class="fas fa-check mr-2"></i>Request Sent';
    
    showNotification(data.message || 'Request sent successfully!', 'success');
  } else {
    throw new Error(data.error || 'Failed to send request');
  }
})
.catch(error => {
  console.error('Error:', error);
  console.error('Error details:', error.message);
  
  button.disabled = false;
  button.classList.remove('opacity-75');
  button.innerHTML = '<i class="fas fa-paper-plane mr-2"></i>Send Request';
  
  showNotification(error.message || 'Failed to send request. Please try again.', 'error');
});
}
});







