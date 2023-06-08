<form method="POST" action="{{ route('save-text') }}">
    @csrf
    <div class="form-group">
      <label for="body">Ceritakan tentang diri Anda:</label>
      <textarea class="form-control" id="body" name="body" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
