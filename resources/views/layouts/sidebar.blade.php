<ul class="flex flex-col pl-0 mb-0">
  @foreach (config('menu') as $menu)
    @if (checkMatchedRoute($menu['route']))
      <li class="mt-0.5 w-full">
        <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ url($menu['route']) }}">
          <div class="text-white bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <x-icon name="{{ $menu['icon'] }}" class="text-white h-3 w-3" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">{{ $menu['title'] }}</span>
        </a>
      </li>
    @else
      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ url($menu['route']) }}">
          <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <x-icon name="{{ $menu['icon'] }}" class="text-black h-3 w-3" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">{{ $menu['title'] }}</span>
        </a>
      </li>
    @endif
  @endforeach

  <li class="w-full mt-4">
    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account pages</h6>
  </li>

  <li class="mt-0.5 w-full">
    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/profile.html">
      <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
        <x-icon name="customer-support" class="text-black h-3 w-3" />
      </div>
      <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
    </a>
  </li>
</ul>