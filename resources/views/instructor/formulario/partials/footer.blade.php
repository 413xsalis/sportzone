<footer class="bg-light py-3 mt-auto">
  <div class="container text-center">
    <small class="text-muted">
      © {{ date('Y') }} SportZone · Sistema de gestión deportiva
    </small>
  </div>
</footer>

{{-- Scripts globales --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-…tu-integrity-hash…" crossorigin="anonymous" defer>
</script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-…tu-integrity-hash…" crossorigin="anonymous" defer>
</script>
{{-- Tu JS principal si lo necesitas --}}
<!-- <script src="{{ asset('js/main.js') }}" defer></script> -->

{{-- Scripts específicos de cada vista --}}
@stack('scripts')