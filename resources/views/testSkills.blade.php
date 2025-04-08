@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6 px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Skills Management</h1>
        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow-sm" 
                onclick="document.getElementById('addSkillModal').classList.remove('hidden')">
            Add New Skill
        </button>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <form action="{{ route('skills.search') }}" method="GET" class="flex">
            <input type="text" name="query" placeholder="Search skills..." 
                   class="flex-grow px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                   value="{{ request('query') }}">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-r-md">
                Search
            </button>
        </form>
    </div>

    <!-- Flash Messages -->
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <!-- Skills Table -->
    <div class="bg-white shadow-md rounded-md overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($skills as $skill)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $skill->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $skill->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $skill->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button type="button" 
                                    class="text-indigo-600 hover:text-indigo-900 mr-3"
                                    onclick="openEditModal({{ $skill->id }}, '{{ $skill->name }}')">
                                Edit
                            </button>
                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" 
                                        onclick="return confirm('Are you sure you want to delete this skill?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">No skills found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if ($skills->hasPages())
        <div class="mt-4">
            {{ $skills->links() }}
        </div>
    @endif

    <!-- Add Skill Modal -->
    <div id="addSkillModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Add New Skill</h3>
                <form class="mt-4" action="{{ route('skills.store') }}" method="POST">
                    @csrf
                    <div class="mt-2 px-7 py-3">
                        <input type="text" name="name" placeholder="Skill name" required
                               class="px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="items-center px-4 py-3">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Save
                        </button>
                        <button type="button" class="mt-3 px-4 py-2 bg-gray-300 text-gray-800 text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500"
                                onclick="document.getElementById('addSkillModal').classList.add('hidden')">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Skill Modal -->
    <div id="editSkillModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Edit Skill</h3>
                <form id="editSkillForm" class="mt-4" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mt-2 px-7 py-3">
                        <input type="text" id="editSkillName" name="name" placeholder="Skill name" required
                               class="px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="items-center px-4 py-3">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Update
                        </button>
                        <button type="button" class="mt-3 px-4 py-2 bg-gray-300 text-gray-800 text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500"
                                onclick="document.getElementById('editSkillModal').classList.add('hidden')">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openEditModal(id, name) {
            document.getElementById('editSkillName').value = name;
            document.getElementById('editSkillForm').action = `/skills/${id}`;
            document.getElementById('editSkillModal').classList.remove('hidden');
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const addModal = document.getElementById('addSkillModal');
            const editModal = document.getElementById('editSkillModal');
            
            if (event.target == addModal) {
                addModal.classList.add('hidden');
            }
            
            if (event.target == editModal) {
                editModal.classList.add('hidden');
            }
        }
    </script>
</div>
@endsection