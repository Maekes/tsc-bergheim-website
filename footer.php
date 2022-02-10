</main>

<?php do_action('tailpress_content_end'); ?>


<?php do_action('tailpress_content_after'); ?>

<footer class='text-gray-600 body-font'>
	<div class='container px-8 lg:px-24 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col'>
		<div class='w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left'>
			<a class='flex title-font font-medium items-center md:justify-start justify-center text-gray-900'>
				<svg xmlns='http://www.w3.org/2000/svg' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-10 h-10 text-white p-2 bg-blue rounded-full' viewBox='0 0 24 24'>
					<path d='M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'></path>
				</svg>
				<span class='ml-3 text-xl font-bold'>
					<span className='text-blue'>TSC</span> Bergheim e.V.
				</span>
			</a>
			<p class='mt-2 text-sm text-gray-500'>
				Der Tauch-Sport-Club aus Bergheim
			</p>
		</div>

	</div>
	<div class='bg-blue'>
		<div class='container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row'>
			<div class="flex text-sm space-x-4 text-white">

				<p class='text-white text-center sm:text-left'>
					© 2022 TSC Bergheim e.V.
				</p>
				<span>|</span>
				<a href="/impressum">
					Impressum
				</a>
				<span>|</span>
				<a href="/datenschutz">
					Datenschutz
				</a>
			</div>
			<span class='inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start'>
				<a class='text-white' href="/admin">

					Login
				</a>

			</span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>