@push('scripts')
<script>
function trocarImagem(elemento) {
  if (elemento.src.endsWith('coracao.png')) {
    elemento.src = '{{ asset('imagens/coracao_2.png') }}';
    elemento.nextElementSibling.textContent = 'Descurtir';
    setTimeout(function() {
      elemento.classList.remove('scale');
    }, 300);
  } else {
    elemento.src = '{{ asset('imagens/coracao.png') }}';
    elemento.nextElementSibling.textContent = 'Curtir';
    setTimeout(function() {
      elemento.classList.remove('scale');
    }, 300);
  }
}
</script>
@endpush

@push('styles')
<style>
.scale {
  transform: scale(1.1);
  transition: transform 0.3s ease;
}
</style>
@endpush

<img src="{{ asset('imagens/coracao.png') }}" class="coracao" onclick="trocarImagem(this)">
<p onclick="trocarImagem(this)">Curtir</p>





@push('scripts')
    <script>
    function trocarImagem(elemento) {
      if (elemento.src.endsWith('coracao.png')) {
        elemento.src = '{{ asset('imagens/coracao_2.png') }}';
        elemento.nextElementSibling.textContent = 'Descurtir';
        setTimeout(function() {
          elemento.classList.remove('scale');
        }, 300);
      } else {
        elemento.src = '{{ asset('imagens/coracao.png') }}';
        elemento.nextElementSibling.textContent = 'Curtir';
        setTimeout(function() {
          elemento.classList.remove('scale');
        }, 300);
      }//