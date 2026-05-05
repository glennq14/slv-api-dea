
<!-----------------------------------------------------
Add your form or content for adding a property here
------------------------------------------------------->
<form method="POST" action="{{ route('properties.store') }}">
@csrf

    <!-----------------------------------------
    Basic location info
    ----------------------------------------->
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
                <div class="w-full">
                    <h3 class="font-semibold text-xl text-blue-900 leading-tight mb-5">
                        {{ __('Custom Fields')  }}
                    </h3>

                    <div id="accordion-collapse" data-accordion="collapse" class="rounded-base border border-default overflow-hidden shadow-xs">
                        <h2 id="accordion-collapse-heading-1" class="accordion-btn bg-blue-50">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body rounded-t-base border border-t-0 border-x-0 border-b-default hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                            <span>Views</span>
                            <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-4 md:p-5">
                            <p class="mb-2 text-body">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                            <p class="text-body">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-fg-brand hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-2" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Orientation</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-3" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                        <span>Garden & Terraces</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden accordion-content" aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-4 md:p-5 border border-t-default border-b-0 border-x-0">
                            <p class="mb-2 text-body">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 text-body">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                            <p class="mb-2 text-body">Learn more about these technologies:</p>
                            <ul class="ps-5 text-body list-disc">
                                <li><a href="https://flowbite.com/pro/" class="text-fg-brand hover:underline">Flowbite Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow" class="text-fg-brand hover:underline">Tailwind UI</a></li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-4" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Private Parking</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-4" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-25" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Kitchen</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-5" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-6" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Extras</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-6" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-7" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Heating</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-7" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-8" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Air Conditioning</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-8" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-9" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Inclusions</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-9" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>

                    <h2 id="accordion-collapse-heading-10" class="accordion-btn bg-blue-50">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body border border-x-0 border-b-default border-t-0 hover:text-heading hover:bg-neutral-secondary-medium gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Furnished</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-10" class="hidden accordion-content border border-s-0 border-e-0 border-t-0 border-b-default" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-4 md:p-5">
                        <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>
                    
                </div>  
            </div>
        </div>
    </div>
</form>

@push('scripts')
<script>
    const buttons = document.querySelectorAll('.accordion-btn');

    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        const content = btn.nextElementSibling;

        // Close all others
        document.querySelectorAll('.accordion-content').forEach(c => {
          if (c !== content) c.classList.add('hidden');
        });

        // Toggle current
        content.classList.toggle('hidden');

        const svg = btn.querySelector('svg'); 
        svg.setAttribute('transform', `rotate(90, 50, 50)`);
      });
    });
</script>
@endpush