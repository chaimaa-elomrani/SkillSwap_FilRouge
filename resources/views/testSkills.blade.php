<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Management</title>
    <!-- Include Tailwind CDN for quick testing -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include Alpine.js for simple interactions -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Skills Management</h1>

        <!-- Flash Messages -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <!-- Search Form -->
            <form action="{{ route('skills.search') }}" method="GET" class="mb-6">
                @csrf
                <div class="flex">
                    <input type="text" name="query" placeholder="Search skills..." 
                           class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ request('query') }}">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-r-md">
                        Search
                    </button>
                </div>
            </form>

            <!-- Add Skill Form -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-3">Add New Skill</h2>
                <form action="{{ route('skills.store') }}" method="POST" class="flex">
                    @csrf
                    <input type="text" name="name" placeholder="Enter skill name" required
                           class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-r-md">
                        Add Skill
                    </button>
                </form>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Skills Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Created At</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm">
                        @forelse ($skills as $skill)
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-6">{{ $skill->id }}</td>
                                <td class="py-3 px-6">{{ $skill->name }}</td>
                                <td class="py-3 px-6">{{ $skill->created_at->format('M d, Y') }}</td>
                                <td class="py-3 px-6 text-center">
                                    <button type="button" 
                                            class="text-blue-500 hover:text-blue-700 mr-2"
                                            onclick="openEditModal({{ $skill->id }}, '{{ $skill->name }}')">
                                        Edit
                                    </button>
                                    <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700" 
                                                onclick="return confirm('Are you sure you want to delete this skill?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-3 px-6 text-center">No skills found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if (method_exists($skills, 'links'))
                <div class="mt-4">
                    {{ $skills->links() }}
                </div>
            @endif
        </div>
    </div>

    <!-- Edit Skill Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-6 w-96">
            <h2 class="text-lg font-semibold mb-4">Edit Skill</h2>
            <form id="editForm" method="POST" action="sills/{{ $skill->id }}">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <input type="text" id="editSkillName" name="name" placeholder="Skill name" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400"
                            onclick="closeEditModal()">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Edit modal functionality
        function openEditModal(id, name) {
            document.getElementById('editSkillName').value = name;
            document.getElementById('editForm').action = `/skills/${id}`;
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('editModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeEditModal();
            }
        });
    </script>
</body>
</html>