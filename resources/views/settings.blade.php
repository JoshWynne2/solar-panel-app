<x-app-layout>
	<style>
		.my-shadow{
			text-shadow: 0px 1px 4px #00000033;
		}
		.block-shadow{
			box-shadow: 0px 1px 4px #00000033;
		}

		canvas {
			position:absolute;
			top:0;
			left:0;
			width:100%;
			height:100%;
			overflow: clip;
			z-index: 11;
        }
	</style>
	<!-- wide box -->
	<div class="p-3 overflow-hidden">

		<div class="relative z-10 rounded-xl bg-white text-black text-center font-medium py-5 block-shadow overflow-clip">
			<div class="relative text-base my-shadow z-20">
				App Version: 0.2
			</div>
			<div class="relative text-5xl my-shadow z-20">
				Solimeter
			</div>
		</div>

		

	</div>
	
	<div class="relative text-white bg-slate w-100 p-5">
		<div onclick="location.href = '{{route('logout')}}'" class="relative text-2xl my-shadow z-20">
			Log out
		</div>
	</div>

	<div class="relative text-white bg-slate w-100 p-5 mt-2">
		<div onclick="location.href = '{{route('profile.edit')}}'" class="relative text-2xl my-shadow z-20">
			Edit Profile
		</div>
	</div>

</x-app-layout>
