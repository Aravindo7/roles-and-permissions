<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    @if(session('Message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('Message')}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif
</div>