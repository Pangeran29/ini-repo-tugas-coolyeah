<!--     // Pangeran Jonathan | 6706223030 | D3 RPLA 46-03
 -->
<x-guest-layout>
    <form method="POST" action="/userStore">
        @csrf

        <!-- username -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" value="{{$user->username}}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- fullname -->
        <div>
            <x-input-label for="fullname" :value="__('Fullname')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" value="{{$user->fullName}}" required autofocus autocomplete="fullname" />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- address -->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{$user->address}}" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        
        <!-- birthdate -->
        <div>
            <x-input-label for="birthdate" :value="__('Birthdate')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" value="{{$user->birthdate}}" required autofocus autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>
        
        <!-- phoneNumber -->
        <div>
            <x-input-label for="phoneNumber" :value="__('PhoneNumber')" />
            <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" value="{{$user->phoneNumber}}" required autofocus autocomplete="phoneNumber" />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
        </div>
        
        <!-- Pangeran Jonathan (6706223030) D3 RPLA 46 03 -->
        <!-- agama -->
        <div>
            <x-input-label for="agama" :value="__('Agama')" />
            <x-text-input id="agama" class="block mt-1 w-full" type="text" name="agama" value="{{$user->agama}}" required autofocus autocomplete="agama" />
            <x-input-error :messages="$errors->get('agama')" class="mt-2" />
        </div>

        <!-- jenis_kelamin -->
        <div>
            <x-input-label for="jenis_kelamin" :value="__('Jenis_kelamin')" />
            <x-text-input id="jenis_kelamin" class="block mt-1 w-full" type="text" name="jenis_kelamin" value="{{$user->jenis_kelamin}}" required autofocus autocomplete="jenis_kelamin" />
            <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
        </div>
    </form>
</x-guest-layout>