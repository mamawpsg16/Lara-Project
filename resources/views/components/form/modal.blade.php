<!-- Modal -->
@props(['mw' => 'modal-md'])
{{-- {{ dd($mw) }} --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div {{ $attributes(['class' => 'modal-dialog '.$mw ]) }} >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $modal_title }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{ $modal_content }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{ $buttons }}
        </div>
      </div>
    </div>
  </div>