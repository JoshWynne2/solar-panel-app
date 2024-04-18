<button {{ $attributes->merge(['type' => 'submit', 'class' => 
	'inline-flex items-center px-6 py-2 bg-orange 
	border border-transparent rounded-md 
	font-semibold text-s text-white
	hover:bg-darkorange transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
