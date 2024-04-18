<nav x-data="{ open: false }" class="my-12 lg:my-44">
	<footer class="fixed bottom-0 w-full bg-gray py-3 z-40">
		<!-- nav bar -->
		<nav class=" flex flex-auto text-white text-center bg-gray z-40">
			<div class="rounded-xl basis-1/3">
			<a href="{{route('dashboard')}}" class="flex flex-col">
				<i class="fa-solid fa-house fa-2xl p-5"></i>
				Overview
			</a>
			</div>
			<div class="rounded-xl basis-1/3">
			<a href="{{route('alarms')}}" class="flex flex-col">
				<i class="fa-solid fa-clock fa-2xl p-5"></i>
				Alarms
			</a>
			</div>
			<div class="rounded-xl basis-1/3">
			<a href="{{route('settings')}}" class="flex flex-col">
				<i class="fa-solid fa-user fa-2xl p-5"></i>
			Settings
			</a>
			</div>
		</nav>
	</footer>
</nav>
