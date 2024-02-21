<x-app-layout>
    <section class="section main-section">
        <div class="card mb-6">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="ri-user-line"></i></span>
              Form Profile
            </p>
          </header>
          <div class="card-content">
            <form method="POST" action="{{ @$item? route('profile.edit', $item->id) : route('profile.create') }}" class="grid sm:grid-cols-2 gap-2">
              @csrf
              <div class="field">
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input 
                    id="first_name" 
                    name="first_name" 
                    class="input" 
                    :error="$errors->get('first_name')"
                    :value="old('first_name', @$item->first_name)" 
                    type="text"/>
              </div>
              <div class="field">
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input 
                    id="last_name" 
                    name="last_name" 
                    class="input" 
                    :error="$errors->get('last_name')"
                    :value="old('last_name', @$item->last_name)" 
                    type="text"/>
              </div>
              <div class="field">
                <x-input-label for="username" :value="__('Username')" />
                <x-text-input 
                    id="username" 
                    name="username" 
                    left="<i class='ri-user-line'></i>"
                    class="input" 
                    :error="$errors->get('username')"
                    :value="old('username', @$item->username)" 
                    type="text"/>
              </div>
              <div class="field">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input 
                    id="password" 
                    name="password" 
                    left="<i class='ri-admin-line'></i>"
                    class="input" 
                    :error="$errors->get('password')"
                    :value="old('password')" 
                    type="text"/>
              </div>
              <div class="field">
                <x-input-label for="city" :value="__('City')" />
                <x-text-input 
                    id="city" 
                    name="city" 
                    class="input" 
                    :error="$errors->get('city')"
                    :value="old('city', @$item->city)" 
                    type="text"/>
              </div>
              <div class="field">
                <x-input-label for="state" :value="__('State')" />
                <x-text-input 
                    id="state" 
                    name="state" 
                    class="input" 
                    :error="$errors->get('state')"
                    :value="old('state', @$item->state)" 
                    type="text"/>
              </div>
              <div class="field">
                <x-input-label for="zip_code" :value="__('ZIP')" />
                <x-text-input 
                    id="zip_code" 
                    name="zip_code" 
                    class="input" 
                    :error="$errors->get('zip_code')"
                    :value="old('zip_code', @$item->zip_code)" 
                    type="text"/>
              </div>
              <div class="field">
                <x-input-label for="address" :value="__('Address')" />
                <x-text-area 
                    id="address" 
                    name="address" 
                    class="input" 
                    :error="$errors->get('address')"
                    type="text">
                    {{old('address', @$item->address)}}
                </x-text-area>
              </div>
              <div class="col-span-2 flex gap-2 justify-end">
                <a href="{{ route('profile.index') }}" class="button red">Cancel</a>
                <button class="button blue">Save</button>
              </div>
            </form>
          </div>
        </div>
      </section>
</x-app-layout>