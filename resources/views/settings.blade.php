@push('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.2/p5.min.js" integrity="sha512-eu9vkh+EbAsW3fMmPTj/DP5W3UegIdu0Z/OABMocvoofx43MYBkcQ9hRIVxZndV1vcCYQwBg+U1PkWl04TD0Jg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("storage/js/main.js")}}"></script>
@endpush
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
					hi
			</div>
			<div class="relative text-5xl my-shadow z-20">
			real log out button real hi
			</div>
		</div>
	</div>

</x-app-layout>