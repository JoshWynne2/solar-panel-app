<x-app-layout>
	<!-- wide box -->
	<div class="p-3">
		<div class="rounded-xl bg-white text-black text-center font-medium py-5 drop-shadow-2xl shadow-black">
			<div class="text-base drop-shadow-2xl shadow-black">
				Today's Generation
			</div>
			<div class="text-5xl drop-shadow-2xl shadow-black">
			{{$data["today_gen"]}}Kwh
			</div>
		</div>
	</div>

	<!-- middle block -->
	<div class="flex">
		<!-- tall block -->
		<div class="p-3 flex-auto flex-grow: 1">
			<div class="rounded-xl bg-white text-black text-center font-medium h-full flex justify-between flex-col">
				<div class="py-5">
					<div class="text-base drop-shadow-2xl shadow-black">
						Sent to grid
					</div>
					<div class="text-5xl drop-shadow-2xl shadow-black">
						{{$data["sent_to_grid"]}}Kwh
					</div>
				</div>
				<div class="py-5">
					<div class="text-base drop-shadow-2xl shadow-black">
						Battery Charge
					</div>
					<div class="text-5xl drop-shadow-2xl shadow-black">
						{{$data["battery_charge"]}}%
					</div>
				</div>
				<div class="py-5">
					<div class="text-base drop-shadow-2xl shadow-black">
						Current Generation
					</div>
					<div class="text-5xl drop-shadow-2xl shadow-black">
						{{$data["current_gen"]}}Kwh
					</div>
				</div>
			</div>
		</div>

		<!-- group of three -->
		<div class="flex flex-col flex-auto ">
			<!-- 1 -->
			<div class="p-3">
			<div class="rounded-xl bg-white text-black text-center font-medium py-5 drop-shadow-2xl shadow-black">
				<div class="text-base drop-shadow-2xl shadow-black">
					Yesterdays's Generation
				</div>
				<div class="text-5xl drop-shadow-2xl shadow-black">
					{{$data["yesterday_gen"]}}Kwh
				</div>
			</div>
		</div>
		<!-- 2 -->
		<div class="p-3">
			<div class="rounded-xl bg-white text-black text-center font-medium py-5 drop-shadow-2xl shadow-black">
				<div class="text-base">
					Inverter Temperature
				</div>
				<div class="text-5xl">
					{{$data["inverter_temp"]}}*C
				</div>
			</div>
		</div>
		<!-- 3 -->
		<div class="p-3">
			<div class="rounded-xl bg-white text-black text-center font-medium py-5 drop-shadow-2xl shadow-black">
				<div class="text-base">
					Current Usage
				</div>
				<div class="text-5xl">
					{{$data["current_usage"]}}Kwh
				</div>
			</div>
		</div>
		</div>

	</div>
</x-app-layout>
