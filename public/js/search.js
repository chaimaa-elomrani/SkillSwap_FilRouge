
    // **********************************SEARCH*****************************************************


        // Wait for the DOM to be fully loaded before executing
        document.addEventListener('DOMContentLoaded', function () {
            // Get the search input element
            const searchInput = document.querySelector('input[placeholder="Search..."]');

            // Add event listener for input changes
            searchInput.addEventListener('input', function (e) {
                const searchTerm = e.target.value.toLowerCase().trim();
                filterSkillsTable(searchTerm);

                // Update the displayed count of skills
                updateSkillsCount();
            });

            // Function to filter the skills table based on search term
            function filterSkillsTable(searchTerm) {
                // Get all skill rows from the table (excluding header)
                const skillRows = document.querySelectorAll('tbody tr');

                // Variable to track visible rows
                let visibleRows = 0;

                // Loop through each row and check if it matches the search term
                skillRows.forEach(row => {
                    // Get the skill name from the first cell
                    const skillName = row.querySelector('td:first-child').textContent.toLowerCase();

                    // Check if the skill name contains the search term
                    if (searchTerm === '' || skillName.includes(searchTerm)) {
                        // Show the row if it matches or if search is empty
                        row.style.display = '';
                        visibleRows++;
                    } else {
                        // Hide the row if it doesn't match
                        row.style.display = 'none';
                    }
                });

                // Display a "no results" message if needed
                handleNoResults(visibleRows);
            }

            // Function to update the skills count display
            function updateSkillsCount() {
                const skillsCount = document.getElementById('skills-count');
                const visibleRows = document.querySelectorAll('tbody tr:not([style*="display: none"])').length;

                // Update the count text
                if (skillsCount) {
                    skillsCount.textContent = visibleRows;
                }
            }

            // Function to handle when there are no search results
            function handleNoResults(visibleRowsCount) {
                // Check if we already have a no-results message
                let noResultsRow = document.getElementById('no-results-row');

                // If there are no visible rows and the message doesn't exist yet
                if (visibleRowsCount === 0) {
                    if (!noResultsRow) {
                        b
                        // Create a "no results" row if it doesn't exist
                        const tbody = document.querySelector('tbody');
                        noResultsRow = document.createElement('tr');
                        noResultsRow.id = 'no-results-row';
                        noResultsRow.className = 'border-b slide-in-up';

                        const cell = document.createElement('td');
                        cell.colSpan = 4; // Span across all columns
                        cell.className = 'py-4 text-center text-gray-500';
                        cell.textContent = 'No skills found matching your search.';

                        noResultsRow.appendChild(cell);
                        tbody.appendChild(noResultsRow);
                    } else {
                        // Show the existing message
                        noResultsRow.style.display = '';
                    }
                } else if (noResultsRow) {
                    // Hide the message if we have results
                    noResultsRow.style.display = 'none';
                }
            }

            // Initialize event handlers for form submission to prevent page refresh
            const searchForm = document.querySelector('form[action*="skills.search"]');
            if (searchForm) {
                searchForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    // The search is already handled by the input event
                });
            }
        });