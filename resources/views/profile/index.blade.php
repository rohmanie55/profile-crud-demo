<x-app-layout>
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
          <h1 class="title">
            Profiles
          </h1>
          <a href="{{ route('profile.create') }}" class="button light">Add User</a>
        </div>
    </section>
    <section class="section main-section">
        <div class="card has-table p-2">
            <div class="card-content">
              <table id="table" style="width: 100%">
                <thead>
                  <th>#</th>
                  <th>Full Name</th>
                  <th>Username</th>
                  <th>City</th>
                  <th>State</th>
                  <th>ZIP</th>
                  <th>Address</th>
                  <th>Actions</th>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
    </section>

    @push('js')
      <script>
         $( document ).ready(function() {
          const table = DataTableBuilder($('#table'), {
          "ajax": "{{ url()->current() }}?ajax=true",
          "columns": [
            {data: 'DT_RowIndex', name: 'id'},
            {data: 'full_name', name: 'full_name'},
            {data: 'username', name: 'username'},
            {data: 'city', name: 'city'},
            {data: 'state', name: 'state'},
            {data: 'zip_code', name: 'zip_code'},
            {data: 'address', name: 'address'},
            {data: null, name: 'action', orderable: false, searchable: false, render: function(obj){
              const url = '{{ url()->current() }}'
              return `
              <div class="buttons right nowrap">
                <a href="${url}/${obj.id}/show" class="button small secondary">
                  <span class="icon"><i class="ri-eye-line"></i></i></span>
                </a>
                <a href="${url}/${obj.id}/edit" class="button small blue">
                  <span class="icon"><i class="ri-edit-line"></i></span>
                </a>
                <button class="button small red action-delete" data-url="${url}/${obj.id}" type="button">
                  <span class="icon"><i class="ri-delete-bin-line"></i></span>
                </button>
              </div>
              `
            }},
          ],
        })

         })
      </script>
    @endpush
</x-app-layout>