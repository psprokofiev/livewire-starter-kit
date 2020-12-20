<div class="modal fade" id="{{ $id }}Modal" tabindex="-1" aria-labelledby="{{ $id }}ModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-{{ $size ?? 'md' }}">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="{{ $id }}ModalLabel">{{ $title }}</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				{{ $slot }}
			</div>
			@isset($footer)
				<div class="modal-footer">
					{{ $footer }}
				</div>
			@endisset
		</div>
	</div>
</div>
