@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->

            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-md-4">

                    <div class="card">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="content-page-header">
                                    <h5>Settings</h5>
                                </div>
                            </div>
                            {{-- sidebar for setting --}}
                            @include('admin.components.setting.sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="card">
                        <div class="card-body w-100">
                            <div class="content-page-header">
                                <h5 class="setting-menu">Colour Theme Settings</h5>
                            </div>

                            <div class="row">
                                <form action="{{ route('admin-colour-settings.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">

                                        <!-- Primary Color -->
                                        <div class="col-md-4 mb-3">
                                            <label>Primary Color</label>
                                            <input type="color" name="primary_color"
                                                value="{{ $colourSetting->primary_color ?? '#000000' }}"
                                                class="form-control form-control-color">
                                        </div>

                                        <!-- Secondary Color -->
                                        <div class="col-md-4 mb-3">
                                            <label>Secondary Color</label>
                                            <input type="color" name="secondary_color"
                                                value="{{ $colourSetting->secondary_color ?? '#ffffff' }}"
                                                class="form-control form-control-color">
                                        </div>

                                        <!-- Gradient 1 -->

                                        <!-- Gradient Colors -->
                                        <div class="col-md-12 mb-3">
                                            <label>Gradient Colors</label>

                                            <!-- Preview -->
                                            <div id="gradient-preview"
                                                style="height:50px;border-radius:6px;margin-bottom:10px;"></div>

                                            <!-- Inputs -->
                                            <div id="gradient-wrapper">

                                                @if(!empty($colourSetting->gradient_colors))
                                                    @foreach($colourSetting->gradient_colors as $color)
                                                        <div class="d-flex mb-2">
                                                            <input type="color" name="gradient_colors[]" value="{{ $color }}"
                                                                class="form-control form-control-color me-2"
                                                                oninput="updatePreview()">

                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="removeColor(this)">X</button>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="d-flex mb-2">
                                                        <input type="color" name="gradient_colors[]" value="#000000"
                                                            class="form-control form-control-color me-2"
                                                            oninput="updatePreview()">

                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="removeColor(this)">X</button>
                                                    </div>
                                                @endif

                                            </div>

                                            <button type="button" class="btn btn-sm btn-primary mt-2" onclick="addColor()">+
                                                Add Color</button>
                                        </div>

                                        <!-- Light Colors -->
                                        <div class="col-md-4 mb-3">
                                            <label>Light Color 1</label>
                                            <input type="color" name="light_color1"
                                                value="{{ $colourSetting->light_color1 ?? '#f8f9fa' }}"
                                                class="form-control form-control-color">
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label>Light Color 2</label>
                                            <input type="color" name="light_color2"
                                                value="{{ $colourSetting->light_color2 ?? '#e9ecef' }}"
                                                class="form-control form-control-color">
                                        </div>

                                        <!-- Button Color -->
                                        <div class="col-md-4 mb-3">
                                            <label>Primary Button Color</label>
                                            <input type="color" name="primary_button_color"
                                                value="{{ $colourSetting->primary_button_color ?? '#007bff' }}"
                                                class="form-control form-control-color">
                                        </div>

                                        <!-- Active Toggle -->
                                        <div class="col-md-12 mb-3">
                                            <label>
                                                <input type="checkbox" name="is_active" {{ $colourSetting->is_active ? 'checked' : '' }}>
                                                Activate Theme
                                            </label>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Save </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function addColor() {
            let wrapper = document.getElementById('gradient-wrapper');

            let div = document.createElement('div');
            div.classList.add('d-flex', 'mb-2');

            div.innerHTML = `
            <input type="color" name="gradient_colors[]" value="#000000"
                class="form-control form-control-color me-2"
                oninput="updatePreview()">

            <button type="button" class="btn btn-danger btn-sm" onclick="removeColor(this)">X</button>
        `;

            wrapper.appendChild(div);

            updatePreview();
        }

        function removeColor(btn) {
            let wrapper = document.getElementById('gradient-wrapper');

            if (wrapper.children.length > 1) {
                btn.parentElement.remove();
                updatePreview();
            } else {
                alert("At least one color required");
            }
        }

        function updatePreview() {
            let inputs = document.querySelectorAll('input[name="gradient_colors[]"]');
            let colors = [];

            inputs.forEach(input => {
                colors.push(input.value);
            });

            document.getElementById('gradient-preview').style.background =
                `linear-gradient(90deg, ${colors.join(',')})`;
        }

        // Run on page load
        window.onload = updatePreview;
    </script>
    @if(session('success'))

        <script>

            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            })

        </script>

    @endif
    @if($errors->any())

        <script>

            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: '{{ $errors->first() }}'
            })

        </script>

    @endif
@endpush