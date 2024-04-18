@push('head')
<script>
let inputdata =	JSON.parse(@json($input));
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.2/p5.min.js" integrity="sha512-eu9vkh+EbAsW3fMmPTj/DP5W3UegIdu0Z/OABMocvoofx43MYBkcQ9hRIVxZndV1vcCYQwBg+U1PkWl04TD0Jg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("storage/js/main.js")}}"></script>
@endpush

<x-primary-button>
		<a href="{{route('oneday')}}">
			(DEBUG) Simulate one day
		</a>
	</x-primary-button>
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
		<!-- <div id="p5sketch">

		</div> -->
		<div id="p5sketch" class="relative z-10 rounded-xl bg-white text-black text-center font-medium py-5 block-shadow overflow-clip">
			<div class="relative text-base my-shadow z-20">
				Today's Generation
			</div>
			<div class="relative text-5xl my-shadow z-20">
			{{$data["today_gen"]}}Kwh
			</div>
		</div>
	</div>

	<!-- middle block -->
	<div class="flex">
		<!-- tall block -->
		<div class="p-3 flex-auto basis-1/2">
			<div class="rounded-xl bg-white text-black text-center font-medium h-full flex justify-between flex-col
			bg-gradient-to-t from-lime to-white to-0% block-shadow"
			style= "--tw-gradient-from-position: {{$data["battery_charge"]}}%;">
				<div class="py-5">
					<div class="text-base my-shadow">
						Sent to grid
					</div>
					<div class="text-5xl my-shadow">
						{{$data["sent_to_grid"]}}Kwh
					</div>
				</div>
				<div class="py-5">
					<div class="text-base my-shadow">
						Battery Charge
					</div>
					<div class="text-5xl my-shadow">
						{{$data["battery_charge"]}}%
					</div>
				</div>
				<div class="py-5">
					<div class="text-base my-shadow">
						Current Generation
					</div>
					<div class="text-5xl my-shadow">
						{{$data["current_gen"]}}Kwh
					</div>
				</div>
			</div>
		</div>

		<!-- group of three -->
		<div class="flex flex-col flex-auto basis-1/2">
			<!-- 1 -->
			<div class="p-3">
				<div class="rounded-xl bg-white text-black text-center font-medium py-5 block-shadow">
					<div class="text-base my-shadow">
						Yesterdays's Generation
					</div>
					<div class="text-5xl my-shadow">
						{{$data["yesterday_gen"]}}Kwh
					</div>
				</div>
			</div>
			<!-- 2 -->
			<div class="p-3">
				<div class="rounded-xl bg-white text-black text-center font-medium py-5 block-shadow">
					<div class="text-base my-shadow">
						Inverter Temperature
					</div>
					<div class="text-5xl my-shadow">
						{{$data["inverter_temp"]}}°C
					</div>
				</div>
			</div>
			<!-- 3 -->
			<div class="p-3">
				<div class="rounded-xl bg-white text-black text-center font-medium py-5 block-shadow">
					<div class="text-base my-shadow">
						Current Usage
					</div>
					<div class="text-5xl my-shadow">
						{{$data["current_usage"]}}Kwh
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- wide box -->
	<div class="p-3">
		<div id="p5sketch2" class="relative z-10 rounded-xl bg-white text-black text-center font-medium py-5 block-shadow overflow-clip">
			<div class="relative text-base my-shadow z-20">
				Today's Usage
			</div>
			<div class="relative text-5xl my-shadow z-20">
			{{$data["today_usage"]}}Kwh
			</div>
		</div>
	</div>
</x-app-layout>
