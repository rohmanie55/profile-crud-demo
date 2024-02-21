<x-app-layout>
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
          <h1 class="title">
            Profile Information
          </h1>
        </div>
    </section>
    <div class="mx-8 p-4 bg-white">
        <div class="mt-6 border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->full_name }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Username</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->username }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">City</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->city }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">State</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->state }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Zip</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->zip_code }}</dd>
              </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Address</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $user->address}}</dd>
            </div>
          </dl>
        </div>
      </div>      
</x-app-layout>