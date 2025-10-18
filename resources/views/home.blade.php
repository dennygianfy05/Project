<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /*! tailwindcss v4.0.14 | MIT License | https://tailwindcss.com */
           @layer theme{:root,:host{--font-sans:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-green-600:oklch(.627 .194 149.214);--color-gray-900:oklch(.21 .034 264.665);--color-zinc-50:oklch(.985 0 0);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-800:oklch(.268 .007 34.298);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-4xl:56rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--leading-tight:1.25;--leading-normal:1.5;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;-webkit-text-decoration:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){appearance:button}::file-selector-button{appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.sr-only{clip:rect(0,0,0,0);white-space:nowrap;border-width:0;width:1px;height:1px;margin:-1px;padding:0;position:absolute;overflow:hidden}.absolute{position:absolute}.relative{position:relative}.static{position:static}.sticky{position:sticky}.inset-0{inset:calc(var(--spacing)*0)}.inset-y-\[3px\]{inset-block:3px}.start-0{inset-inline-start:calc(var(--spacing)*0)}.end-0{inset-inline-end:calc(var(--spacing)*0)}.top-0{top:calc(var(--spacing)*0)}.z-20{z-index:20}.container{width:100%}@media (width>=40rem){.container{max-width:40rem}}@media (width>=48rem){.container{max-width:48rem}}@media (width>=64rem){.container{max-width:64rem}}@media (width>=80rem){.container{max-width:80rem}}@media (width>=96rem){.container{max-width:96rem}}.mx-auto{margin-inline:auto}.my-6{margin-block:calc(var(--spacing)*6)}.-ms-8{margin-inline-start:calc(var(--spacing)*-8)}.ms-1{margin-inline-start:calc(var(--spacing)*1)}.ms-2{margin-inline-start:calc(var(--spacing)*2)}.ms-4{margin-inline-start:calc(var(--spacing)*4)}.me-1\.5{margin-inline-end:calc(var(--spacing)*1.5)}.me-2{margin-inline-end:calc(var(--spacing)*2)}.me-3{margin-inline-end:calc(var(--spacing)*3)}.me-5{margin-inline-end:calc(var(--spacing)*5)}.me-10{margin-inline-end:calc(var(--spacing)*10)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.mt-2{margin-top:calc(var(--spacing)*2)}.mt-4{margin-top:calc(var(--spacing)*4)}.mt-5{margin-top:calc(var(--spacing)*5)}.mt-6{margin-top:calc(var(--spacing)*6)}.mt-10{margin-top:calc(var(--spacing)*10)}.mt-auto{margin-top:auto}.-mb-px{margin-bottom:-1px}.mb-0\.5{margin-bottom:calc(var(--spacing)*.5)}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-5{margin-bottom:calc(var(--spacing)*5)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.mb-\[2px\]{margin-bottom:2px}.block{display:block}.contents{display:contents}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.aspect-square{aspect-ratio:1}.aspect-video{aspect-ratio:var(--aspect-video)}.size-3\!{width:calc(var(--spacing)*3)!important;height:calc(var(--spacing)*3)!important}.size-5{width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}.size-8{width:calc(var(--spacing)*8);height:calc(var(--spacing)*8)}.size-9{width:calc(var(--spacing)*9);height:calc(var(--spacing)*9)}.size-full{width:100%;height:100%}.\!h-10{height:calc(var(--spacing)*10)!important}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-7{height:calc(var(--spacing)*7)}.h-8{height:calc(var(--spacing)*8)}.h-9{height:calc(var(--spacing)*9)}.h-10{height:calc(var(--spacing)*10)}.h-14\.5{height:calc(var(--spacing)*14.5)}.h-dvh{height:100dvh}.h-full{height:100%}.min-h-screen{min-height:100vh}.min-h-svh{min-height:100svh}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-8{width:calc(var(--spacing)*8)}.w-9{width:calc(var(--spacing)*9)}.w-10{width:calc(var(--spacing)*10)}.w-\[220px\]{width:220px}.w-\[448px\]{width:448px}.w-full{width:100%}.w-px{width:1px}.max-w-\[335px\]{max-width:335px}.max-w-lg{max-width:var(--container-lg)}.max-w-md{max-width:var(--container-md)}.max-w-none{max-width:none}.max-w-sm{max-width:var(--container-sm)}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.cursor-pointer{cursor:pointer}.auto-rows-min{grid-auto-rows:min-content}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.items-start{align-items:flex-start}.justify-between{justify-content:space-between}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-2{gap:calc(var(--spacing)*2)}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}.gap-6{gap:calc(var(--spacing)*6)}:where(.space-y-2>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*2)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-3>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*3)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*3)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-6>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*6)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*6)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-\[2px\]>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(2px*var(--tw-space-y-reverse));margin-block-end:calc(2px*calc(1 - var(--tw-space-y-reverse)))}:where(.space-x-0\.5>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*.5)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*.5)*calc(1 - var(--tw-space-x-reverse)))}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}:where(.space-x-2>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*2)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-x-reverse)))}.self-stretch{align-self:stretch}.truncate{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-lg{border-radius:var(--radius-lg)}.rounded-md{border-radius:var(--radius-md)}.rounded-sm{border-radius:var(--radius-sm)}.rounded-xl{border-radius:var(--radius-xl)}.rounded-ee-lg{border-end-end-radius:var(--radius-lg)}.rounded-es-lg{border-end-start-radius:var(--radius-lg)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.border-b{border-bottom-style:var(--tw-border-style);border-bottom-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-neutral-200{border-color:var(--color-neutral-200)}.border-transparent{border-color:#0000}.border-zinc-200{border-color:var(--color-zinc-200)}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-neutral-100{background-color:var(--color-neutral-100)}.bg-neutral-200{background-color:var(--color-neutral-200)}.bg-neutral-900{background-color:var(--color-neutral-900)}.bg-white{background-color:var(--color-white)}.bg-zinc-50{background-color:var(--color-zinc-50)}.bg-zinc-200{background-color:var(--color-zinc-200)}.fill-current{fill:currentColor}.stroke-gray-900\/20{stroke:color-mix(in oklab,var(--color-gray-900)20%,transparent)}.p-0{padding:calc(var(--spacing)*0)}.p-6{padding:calc(var(--spacing)*6)}.p-10{padding:calc(var(--spacing)*10)}.px-1{padding-inline:calc(var(--spacing)*1)}.px-5{padding-inline:calc(var(--spacing)*5)}.px-8{padding-inline:calc(var(--spacing)*8)}.px-10{padding-inline:calc(var(--spacing)*10)}.py-0\!{padding-block:calc(var(--spacing)*0)!important}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.py-8{padding-block:calc(var(--spacing)*8)}.ps-3{padding-inline-start:calc(var(--spacing)*3)}.ps-7{padding-inline-start:calc(var(--spacing)*7)}.pe-4{padding-inline-end:calc(var(--spacing)*4)}.pb-4{padding-bottom:calc(var(--spacing)*4)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-center{text-align:center}.text-start{text-align:start}.text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-xs{font-size:var(--text-xs);line-height:var(--tw-leading,var(--text-xs--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-none{--tw-leading:1;line-height:1}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.leading-tight{--tw-leading:var(--leading-tight);line-height:var(--leading-tight)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-normal{--tw-font-weight:var(--font-weight-normal);font-weight:var(--font-weight-normal)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.\!text-green-600{color:var(--color-green-600)!important}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-black{color:var(--color-black)}.text-green-600{color:var(--color-green-600)}.text-stone-800{color:var(--color-stone-800)}.text-white{color:var(--color-white)}.text-zinc-400{color:var(--color-zinc-400)}.text-zinc-500{color:var(--color-zinc-500)}.text-zinc-600{color:var(--color-zinc-600)}.lowercase{text-transform:lowercase}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-xs{--tw-shadow:0 1px 2px 0 var(--tw-shadow-color,#0000000d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.outline{outline-style:var(--tw-outline-style);outline-width:1px}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.group-data-open\/disclosure-button\:block:is(:where(.group\/disclosure-button)[data-open] *){display:block}.group-data-open\/disclosure-button\:hidden:is(:where(.group\/disclosure-button)[data-open] *){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:start-\[0\.4rem\]:before{content:var(--tw-content);inset-inline-start:.4rem}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}.hover\:bg-zinc-800\/5:hover{background-color:color-mix(in oklab,var(--color-zinc-800)5%,transparent)}.hover\:text-zinc-800:hover{color:var(--color-zinc-800)}}.data-open\:block[data-open]{display:block}@media (width<64rem){.max-lg\:hidden{display:none}}@media (width<48rem){.max-md\:flex-col{flex-direction:column}.max-md\:pt-6{padding-top:calc(var(--spacing)*6)}}@media (width>=40rem){.sm\:w-\[350px\]{width:350px}.sm\:px-0{padding-inline:calc(var(--spacing)*0)}}@media (width>=48rem){.md\:hidden{display:none}.md\:w-\[220px\]{width:220px}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:p-10{padding:calc(var(--spacing)*10)}}@media (width>=64rem){.lg\:-ms-px{margin-inline-start:-1px}.lg\:ms-0{margin-inline-start:calc(var(--spacing)*0)}.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:block{display:block}.lg\:flex{display:flex}.lg\:hidden{display:none}.lg\:aspect-auto{aspect-ratio:auto}.lg\:h-8{height:calc(var(--spacing)*8)}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:max-w-none{max-width:none}.lg\:grow{flex-grow:1}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-ss-lg{border-start-start-radius:var(--radius-lg)}.lg\:rounded-e-lg{border-start-end-radius:var(--radius-lg);border-end-end-radius:var(--radius-lg)}.lg\:rounded-e-lg\!{border-start-end-radius:var(--radius-lg)!important;border-end-end-radius:var(--radius-lg)!important}.lg\:rounded-ee-none{border-end-end-radius:0}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}.lg\:px-0{padding-inline:calc(var(--spacing)*0)}}:where(.rtl\:space-x-reverse:where(:dir(rtl),[dir=rtl],[dir=rtl] *)>:not(:last-child)){--tw-space-x-reverse:1}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:border-neutral-700{border-color:var(--color-neutral-700)}.dark\:border-neutral-800{border-color:var(--color-neutral-800)}.dark\:border-stone-800{border-color:var(--color-stone-800)}.dark\:border-zinc-700{border-color:var(--color-zinc-700)}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:bg-neutral-700{background-color:var(--color-neutral-700)}.dark\:bg-stone-950{background-color:var(--color-stone-950)}.dark\:bg-white\/30{background-color:color-mix(in oklab,var(--color-white)30%,transparent)}.dark\:bg-zinc-800{background-color:var(--color-zinc-800)}.dark\:bg-zinc-900{background-color:var(--color-zinc-900)}.dark\:bg-linear-to-b{--tw-gradient-position:to bottom in oklab;background-image:linear-gradient(var(--tw-gradient-stops))}.dark\:from-neutral-950{--tw-gradient-from:var(--color-neutral-950);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.dark\:to-neutral-900{--tw-gradient-to:var(--color-neutral-900);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.dark\:stroke-neutral-100\/20{stroke:color-mix(in oklab,var(--color-neutral-100)20%,transparent)}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:text-black{color:var(--color-black)}.dark\:text-white{color:var(--color-white)}.dark\:text-white\/80{color:color-mix(in oklab,var(--color-white)80%,transparent)}.dark\:text-zinc-400{color:var(--color-zinc-400)}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}.dark\:hover\:bg-white\/\[7\%\]:hover{background-color:color-mix(in oklab,var(--color-white)7%,transparent)}.dark\:hover\:text-white:hover{color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}.\[\&\>div\>svg\]\:size-5>div>svg{width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}:where(.\[\:where\(\&\)\]\:size-4){width:calc(var(--spacing)*4);height:calc(var(--spacing)*4)}:where(.\[\:where\(\&\)\]\:size-5){width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}:where(.\[\:where\(\&\)\]\:size-6){width:calc(var(--spacing)*6);height:calc(var(--spacing)*6)}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-space-y-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-outline-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}@property --tw-gradient-position{syntax:"*";inherits:false}@property --tw-gradient-from{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-via{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-to{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-stops{syntax:"*";inherits:false}@property --tw-gradient-via-stops{syntax:"*";inherits:false}@property --tw-gradient-from-position{syntax:"<length-percentage>";inherits:false;initial-value:0%}@property --tw-gradient-via-position{syntax:"<length-percentage>";inherits:false;initial-value:50%}@property --tw-gradient-to-position{syntax:"<length-percentage>";inherits:false;initial-value:100%}
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #fff8f0 0%, #ffeaa7 100%);
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #d63031 0%, #e17055 100%);
            padding: 1rem 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(214, 48, 49, 0.3);
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            background: rgba(214, 48, 49, 0.95);
            backdrop-filter: blur(10px);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .nav-toggle {
            display: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            margin-top: 70px;
            padding: 4rem 2rem;
            text-align: center;
            background: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80') center/cover;
            position: relative;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 800px;
        }

        .hero h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 4rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .cta-button {
            background: linear-gradient(135deg, #d63031 0%, #e17055 100%);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(214, 48, 49, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 25px rgba(214, 48, 49, 0.4);
        }

        /* Menu Section */
        .menu-section {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-family: 'Dancing Script', cursive;
            font-size: 3rem;
            text-align: center;
            color: #d63031;
            margin-bottom: 3rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        /* STILI MIGLIORATI PER I BOTTONI DEL MENU */
        .menu-categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 3rem;
            padding: 0 1rem;
        }

        .category-btn {
            position: relative;
            background: white;
            color: #d63031;
            border: 2px solid #d63031;
            padding: 1rem 2rem;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            overflow: hidden;
            min-width: 160px;
            box-shadow: 0 4px 15px rgba(214, 48, 49, 0.2);

            /* Aggiungi icone con pseudo-elementi */
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }



        /* Effetto gradiente di sfondo animato */
        .category-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, #d63031 0%, #e17055 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
            border-radius: 23px;
        }

        /* Stili per hover */
        .category-btn:hover {
            color: white;
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 8px 25px rgba(214, 48, 49, 0.4);
            border-color: transparent;
        }

        .category-btn:hover::after {
            opacity: 1;
        }

        /* Stili per il bottone attivo */
        .category-btn.active {
            background: linear-gradient(135deg, #d63031 0%, #e17055 100%);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(214, 48, 49, 0.4);
            border-color: #d63031;
        }

        .category-btn.active::after {
            opacity: 1;
        }

        /* Effetto di pressione */
        .category-btn:active {
            transform: translateY(-1px) scale(0.98);
            transition: all 0.1s ease;
        }

        /* Colori specifici per ogni categoria */
        .category-btn:nth-child(1):hover,
        .category-btn:nth-child(1).active {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            box-shadow: 0 8px 25px rgba(214, 48, 49, 0.4);
        }

        .category-btn:nth-child(2):hover,
        .category-btn:nth-child(2).active {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            box-shadow: 0 8px 25px rgba(214, 48, 49, 0.4);
        }

        .category-btn:nth-child(3):hover,
        .category-btn:nth-child(3).active {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            box-shadow: 0 8px 25px rgba(214, 48, 49, 0.4);
        }

        .category-btn:nth-child(4):hover,
        .category-btn:nth-child(4).active {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            box-shadow: 0 8px 25px rgba(214, 48, 49, 0.4);
        }

        .category-btn:nth-child(5):hover,
        .category-btn:nth-child(5).active {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            box-shadow: 0 8px 25px rgba(214, 48, 49, 0.4);
        }

        /* Effetto scintillio */
        .category-btn::before {
            position: relative;
            z-index: 1;
            transition: transform 0.3s ease;
        }

        .category-btn:hover::before {
            transform: scale(1.2) rotate(10deg);
        }

        /* FINE STILI MIGLIORATI PER I BOTTONI */

        .menu-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .menu-item-big {
            width: clamp(320px, 65%, 65%);
            max-width: 600px;
        }

        .menu-item-small {
            width: clamp(320px, 35%, 480px);
        }

        /* Recipe Card Styles */
        .recipe,
        .pizza-box {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .pizza-box {
            flex: 3 1 30ch;
            height: calc(282px + 5vw);
            overflow: hidden;
            border-radius: 8px 0 0 8px;
        }

        .pizza-box img {
            max-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            object-fit: cover;
            object-position: 50% 50%;
        }

        .recipe {
            border: 2px solid #F2F2F2;
            border-radius: 8px;
            overflow: hidden;
            background: white;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .recipe:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            border-color: #d63031;
        }

        .recipe-content {
            padding: 16px 32px;
            flex: 4 1 40ch;
        }

        .recipe-tags {
            margin: 0 -8px;
        }

        .recipe-tag {
            display: inline-block;
            margin: 8px;
            font-size: 0.875em;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 0.02em;
            color: #d63031;
            background: rgba(214, 48, 49, 0.1);
            padding: 4px 8px;
            border-radius: 15px;
        }

        .recipe-title {
            margin: 0;
            font-size: clamp(1.4em, 2.1vw, 2.1em);
            font-family: 'Dancing Script', cursive;
            margin-bottom: 0.5rem;
        }

        .recipe-title a {
            text-decoration: none;
            color: #d63031;
        }

        .recipe-metadata {
            margin: 0;
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .recipe-rating {
            font-size: 1.2em;
            letter-spacing: 0.05em;
            color: #ffa726;
        }

        .recipe-rating span {
            color: #ddd;
        }

        .recipe-votes {
            font-size: 0.825em;
            font-style: italic;
            color: #666;
        }

        .recipe-price {
            font-size: 1.4em;
            font-weight: bold;
            color: #e17055;
            margin-left: 0;
        }

        .recipe-desc {
            color: #666;
            line-height: 1.55;
            margin-bottom: 1rem;
        }

        .recipe-save {
            display: flex;
            align-items: center;
            padding: 8px 16px 8px 14px;
            border-radius: 25px;
            border: 2px solid #d63031;
            color: #d63031;
            background: none;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .recipe-save:hover {
            background: #d63031;
            color: white;
            transform: translateY(-2px);
        }

        .recipe-save svg {
            margin-right: 6px;
            width: 18px;
            height: 18px;
        }

        /*bevande*/
        /* Stili specifici per la griglia delle bevande */
        #bevande .menu-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            justify-content: center;
        }

        /* Stili specifici per le singole voci del menu bevande */
        #bevande .menu-item {
            flex: 1 1 45%;
            padding: 1.5rem;
            border-radius: 8px;
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #bevande .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        /* Allinea il titolo e il prezzo delle bevande */
        #bevande .menu-item-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 0.5rem;
        }

        /* Allinea il titolo e il prezzo delle bevande */
        #bevande .menu-item-prezzo {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 0.5rem;
        }

        .menu-category {
            display: none;
        }

        .menu-category.active {
            display: block;
        }

        .bibite-price {
            margin-right: 0px;
        }

        /*fine bevande*/
        /* About Section */
        .about-section {
            background: white;
            padding: 4rem 2rem;
            margin: 2rem 0;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h2 {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            color: #d63031;
            margin-bottom: 1rem;
        }

        .about-text p {
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .about-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        /* Footer */
        .footer {
            background: #2d3436;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            font-family: 'Dancing Script', cursive;
            font-size: 1.5rem;
            color: #e17055;
            margin-bottom: 1rem;
        }

        .footer-section p,
        .footer-section a {
            color: #ddd;
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }

        .footer-section a:hover {
            color: #e17055;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            background: #e17055;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #d63031;
            transform: translateY(-2px);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #636e72;
            color: #b2bec3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: #d63031;
                padding: 1rem;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .menu-grid {
                grid-template-columns: 1fr;
            }

            .about-container {
                grid-template-columns: 1fr;
            }

            .logo {
                font-size: 2rem;
            }

            /* Responsive per i bottoni del menu */
            .menu-categories {
                gap: 1rem;
                flex-direction: column;
                align-items: center;
            }

            .category-btn {
                min-width: 200px;
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
            }

            /* Regola per schermi più piccoli (es. cellulari) */
            #bevande .menu-item {
                flex: 1 1 100%;
            }
        }

        @media (max-width: 480px) {
            .category-btn {
                min-width: 180px;
                padding: 0.7rem 1.2rem;
                font-size: 0.9rem;
            }
        }
        </style>
    </head>

<body class=" flex p-6 lg:p-8   min-h-screen flex-col">

    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Nome tuo ristorante</a>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">Chi Siamo</a></li>
                <li><a href="#contact">Contatti</a></li>
                    @if (Route::has('login'))
               
                    @auth
                     <li> <a
                            href="{{ url('/dashboard') }}"
                        >
                            Dashboard
                        </a></li>
                        
                    @else
                     <li> <a
                            href="{{ route('login') }}"
                        >
                            Accedi
                        </a></li>
                        

                        @if (Route::has('register'))

                        <li> <a
                                href="{{ route('register') }}"
                        >
                                Registrati
                        </a></li>
                         
                        @endif
                    @endauth
            </ul>
         
     

    </nav>
    @endif

    
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Benvenuti a "nome tuo ristorante"</h1>
            <p>La vera pizza italiana nel cuore della città. Tradizione, qualità e sapori.</p>
            <a href="tel:+390212345678" class="cta-button">
                <i class="fas fa-phone"></i> Prenota Ora
            </a>
        </div>
    </section>

    <section class="menu-section" id="menu">
        <h2 class="section-title">Il Nostro Menu</h2>

        <div class="menu-categories">
            <button class="category-btn active" onclick="showCategory('pizze-classiche')">Pizze Classiche</button>
            <button class="category-btn" onclick="showCategory('pizze-speciali')">Pizze Speciali</button>
            <button class="category-btn" onclick="showCategory('antipasti')">Antipasti</button>
            <button class="category-btn" onclick="showCategory('dolci')">Dolci</button>
            <button class="category-btn" onclick="showCategory('bevande')">Bevande</button>
        </div>

        <div class="menu-category active" id="pizze-classiche">
            <div class="menu-grid">
                <div class="menu-item-big">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Margherita">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Classica</span>
                                <span class="recipe-tag">Vegetariana</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Pizza Margherita</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€8,50</span>
                            </p>
                            <p class="recipe-desc">Pomodoro San Marzano DOP, mozzarella fior di latte, basilico fresco e
                                olio extra vergine d'oliva. La regina delle pizze napoletane.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Marinara">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Tradizionale</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Pizza Marinara</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€7,00</span>
                            </p>
                            <p class="recipe-desc">Pomodoro San Marzano, aglio, origano e olio extra vergine d'oliva.
                                Semplice e saporita.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Napoletana">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Napoletana</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Pizza Napoletana</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€9,50</span>
                            </p>
                            <p class="recipe-desc">Pomodoro, mozzarella, acciughe del Cantabrico, capperi, olive nere e
                                origano.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-big">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Quattro Stagioni">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Classica</span>
                                <span class="recipe-tag">Ricca</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Pizza Quattro Stagioni</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€11,00</span>
                            </p>
                            <p class="recipe-desc">Pomodoro, mozzarella, prosciutto cotto, funghi porcini, carciofi
                                romani e olive nere. Quattro sapori in una sola pizza.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1604382355076-af4b0eb60143?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Capricciosa">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Ricca</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Pizza Capricciosa</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€11,50</span>
                            </p>
                            <p class="recipe-desc">Pomodoro, mozzarella, prosciutto cotto, funghi, carciofi, olive e
                                uovo.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Diavola">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Piccante</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Pizza Diavola</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€10,00</span>
                            </p>
                            <p class="recipe-desc">Pomodoro, mozzarella, salame piccante calabrese e peperoncino fresco.
                            </p>

                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="menu-category" id="pizze-speciali">
            <div class="menu-grid">
                <div class="menu-item-big">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Special">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Speciale</span>
                                <span class="recipe-tag">Gourmet</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Pizza Special</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€14,50</span>
                            </p>
                            <p class="recipe-desc">Crema di burrata pugliese, prosciutto crudo di Parma 24 mesi, rucola
                                selvaggia, pomodorini confit e grana padano DOP.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Tartufata">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Tartufo</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Pizza Tartufata</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€16,00</span>
                            </p>
                            <p class="recipe-desc">Crema di funghi porcini, mozzarella, tartufo nero umbro, gorgonzola
                                DOP e noci.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Salmone e Rucola">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Pesce</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Salmone e Rucola</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€13,50</span>
                            </p>
                            <p class="recipe-desc">Base bianca, mozzarella, salmone affumicato norvegese, rucola e
                                capperi.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-big">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Pizza Vegetariana Gourmet">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Vegetariana</span>
                                <span class="recipe-tag">Gourmet</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Vegetariana Gourmet</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€12,50</span>
                            </p>
                            <p class="recipe-desc">Pomodoro, mozzarella di bufala DOP, zucchine grigliate, melanzane,
                                peperoni arrostiti e basilico fresco.</p>

                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="menu-category" id="antipasti">
            <div class="menu-grid">
                <div class="menu-item-big">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Antipasto Misto">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Tradizionale</span>
                                <span class="recipe-tag">Salumi</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Antipasto Misto della Casa</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€12,00</span>
                            </p>
                            <p class="recipe-desc">Selezione di salumi e formaggi locali, olive ascolane, bruschette,
                                verdure sott'olio.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Bruschette Miste">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Vegetariano</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Bruschette Miste</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€8,50</span>
                            </p>
                            <p class="recipe-desc">Tre bruschette: pomodoro e basilico, ricotta e miele, funghi e
                                gorgonzola.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Mozzarella di Bufala">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Fresco</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Mozzarella di Bufala</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€10,00</span>
                            </p>
                            <p class="recipe-desc">Mozzarella di bufala campana DOP, pomodorini, basilico, olio EVO.</p>

                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="menu-category" id="dolci">
            <div class="menu-grid">
                <div class="menu-item-big">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="data:image/jpeg;base64,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"
                                alt="Tiramisù">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Classico</span>
                                <span class="recipe-tag">Dolce</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Tiramisù della Casa</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€6,50</span>
                            </p>
                            <p class="recipe-desc">Il nostro tiramisù tradizionale fatto in casa con mascarpone, caffè
                                e cacao.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://www.tipikoshop.it/wp-content/uploads/2021/05/tette-delle-monache-o-sospiri-pugliesi.jpg"
                                alt="Panna Cotta">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Fresco</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Panna Cotta ai Frutti di Bosco</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€5,50</span>
                            </p>
                            <p class="recipe-desc">Delicata panna cotta servita con coulis di frutti di bosco freschi.
                            </p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-small">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="https://www.tipikoshop.it/wp-content/uploads/2021/05/tette-delle-monache-o-sospiri-pugliesi.jpg"
                                alt="Cannoli Siciliani">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Sicilia</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Cannoli Siciliani</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€7,00</span>
                            </p>
                            <p class="recipe-desc">Due cannoli croccanti ripieni di ricotta fresca, canditi e gocce di
                                cioccolato.</p>

                        </div>
                    </article>
                </div>
                <div class="menu-item-big">
                    <article class="recipe">
                        <div class="pizza-box">
                            <img src="data:image/jpeg;base64,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"
                                alt="Gelato Artigianale">
                        </div>
                        <div class="recipe-content">
                            <p class="recipe-tags">
                                <span class="recipe-tag">Artigianale</span>
                            </p>
                            <h1 class="recipe-title"><a href="#">Gelato Artigianale</a></h1>
                            <p class="recipe-metadata">

                                <span class="recipe-price">€4,50</span>
                            </p>
                            <p class="recipe-desc">Due palline di gelato artigianale a scelta tra diversi gusti
                                classici e di stagione.</p>

                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="menu-category" id="bevande">
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3>Birre alla Spina</h3>

                    </div>
                    <div class="menu-item-prezzo">
                        <p>Birra chiara 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Birra chiara 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Birra chiara 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Birra chiara 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>

                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3>Vini della Casa</h3>
                        <span class="price">€18,00</span>
                    </div>
                    <p>Vino rosso o bianco della casa (bottiglia 0,75l) - al calice €4,50</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3>Bibite e Acqua</h3>
                        <span class="price">€3,00</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Coca Cola 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Fanta 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Fanta 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Fanta 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Fanta 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Fanta 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Fanta 0,40l </p> <span class="bibite-price">€4,50</span>
                    </div>


                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3>Caffè e Digestivi</h3>
                        <span class="price">€2,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Caffè espresso </p> <span class="bibite-price">€1,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Caffè espresso </p> <span class="bibite-price">€1,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Caffè espresso </p> <span class="bibite-price">€1,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Caffè espresso </p> <span class="bibite-price">€1,50</span>
                    </div>
                    <div class="menu-item-prezzo">
                        <p>Caffè espresso </p> <span class="bibite-price">€1,50</span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="about-container">
            <div class="about-text">
                <h2>Chi Siamo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1571997478779-2adcbbe9ab2f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Interno pizzeria">
            </div>
        </div>
    </section>

    <footer class="footer" id="contact">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Contatti</h3>
                <p><i class="fas fa-phone"></i> +39 02 1234567</p>
                <p style="display: inline-flex; align-items: center; gap: 6px;">
                    <i class="fas fa-envelope"></i>
                    la tua mail
                </p>
                <p><i class="fas fa-map-marker-alt"></i> la tua via </p>
            </div>
            <div class="footer-section">
                <h3>Orari di Apertura</h3>
                <p>Lunedì - Domenica</p>
                <p>18:30 - 24:00</p>
                <p>Martedì Chiuso</p>
                <p>Pranzo: Solo weekend 12:00-15:00</p>
            </div>
            <div class="footer-section">
                <h3>Seguici</h3>
                <p>Resta aggiornato sulle nostre novità e promozioni speciali!</p>
                <div class="social-links">
                    <a href=" "><i class="fab fa-facebook-f"></i></a>
                    <a href=" "><i class="fab fa-instagram"></i></a>

                </div>
            </div>
            <div class="footer-section">
                <h3>Prenota Ora</h3>
                <p>Per prenotazioni chiamaci o scrivici!</p>
                <a href="tel:+390212345678" class="cta-button" style="margin-top: 1rem;">
                    <i class="fas fa-phone"></i> Chiama Ora
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 nome tuo ristorante - Tutti i diritti riservati</p>
            <p>&copy; Denny Gianferrante</p>

        </div>
    </footer>

    <script>

        // Mobile menu toggle
        const navToggle = document.getElementById('navToggle');
        const navLinks = document.getElementById('navLinks');
        navToggle.addEventListener('click', function () {
            navLinks.classList.toggle('active');
        });
        // Menu category switching
        function showCategory(categoryId) {
            // Hide all categories
            const categories = document.querySelectorAll('.menu-category');
            categories.forEach(category => {
                category.classList.remove('active');
            });
            // Show selected category
            document.getElementById(categoryId).classList.add('active');
            // Update active button
            const buttons = document.querySelectorAll('.category-btn');
            buttons.forEach(button => {
                button.classList.remove('active');
            });
            event.target.classList.add('active');
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                // Close mobile menu if open
                navLinks.classList.remove('active');
            });
        });
        // Add animation to menu items on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        // Observe menu items
        document.querySelectorAll('.menu-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'all 0.6s ease';
            observer.observe(item);
        });
    </script>

</body>

</html>