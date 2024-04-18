<button {{ $attributes->merge(['type' => 'submit', 'class' => 
	'inline-flex items-center px-6 py-2 bg-gray 
	border border-transparent rounded-md 
	font-semibold text-s text-white
	hover:bg-black transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
