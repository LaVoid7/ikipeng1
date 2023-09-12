<body>
    <div class="d-flex">
        <a href="{{ route('cucian.show', ['cucian' => $cucian->id]) }}"
            class="btn btn-outline-light bg-info btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
        <a href="{{ route('cucian.edit', ['cucian' => $cucian->id]) }}"
            class="btn btn-outline-warning btn-sm me-2"><i class="bi-pencil-square"></i></a>
        <div>
            <form action="{{ route('cucian.destroy', ['cucian' => $cucian->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger btn-sm me-2 btn-delete"
                    data-name="{{ $cucian->kode_cucian . ' ' . $cucian->nama_cucian }}">
                    <i class="bi-trash"></i>
                </button>
            </form>
        </div>
    </div>
</body>
