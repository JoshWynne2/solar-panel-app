<nav x-data="{ open: false }">
	<footer class="fixed bottom-0 w-full py-5 z-40">
		<!-- nav bar -->
		<nav class=" flex flex-auto text-white text-center bg-gray z-40">
			<div class="rounded-xl basis-1/3">
			<a href="{{route('dashboard')}}">Overview</a>
			</div>
			<div class="rounded-xl basis-1/3">
				<a href="{{route('alarms')}}">Alarms</a>
			</div>
			<div class="rounded-xl basis-1/3">
			<a href="{{route('settings')}}">Settings</a>
			</div>
		</nav>
	</footer>
</nav>
