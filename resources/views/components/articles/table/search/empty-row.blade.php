@props(['message'])

<div class="flex justify-center items-center gap-4 p-2 rounded-md bg-slate-300">
    <div class="bg-slate-700 shadow_light_for_text text-white w-1/2 px-3 py-1.5 rounded text-center">
        <span class="shadow_for_text">{{ $message }}</span>
    </div>
</div>
