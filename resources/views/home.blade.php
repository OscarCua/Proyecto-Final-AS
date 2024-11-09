@extends('layouts.app')

@section('content')
<div class="xs-pd-20-10 pd-ltr-20">
    <div class="card">
        <div class="card-body">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Verificación</h2>
                <div id="qr-container" style="display:none; text-align:center; margin-top:20px;">
                    <div id="qr-code" style="max-width:100%;"></div>
                    <p>Escanea este código QR con tu aplicación de Google Authenticator y haz clic en verificar una vez que lo hayas escaneado.</p>
                    <button type="button" class="btn btn-dark" id="verify-btn">Verificar 2FA</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <style>
        /* Estilos para el contenedor del QR */
        #qr-container {
            display: none;
            text-align: center;
            margin-top: 20px;
        }

        #qr-code {
            max-width: 100%;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Habilitar 2FA al cargar la página
            $.ajax({
                url: 'enable-2fa',
                datatype: 'json',
                method: "post",
                success: function(response) {
                    console.log(response); // Verificar la respuesta del servidor
                    if (response.status == true && response.data.qr) {
                        $('#qr-code').html(response.data.qr); // Insertar el SVG directamente en el contenedor
                        $('#qr-container').show();
                        $('#verify-btn').on('click', function() {
                            Verify2Fa(this, response.data.secretKey);
                        });
                    } else {
                        alert('Error enabling 2FA. No QR code received. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error Details: ", xhr.responseText, status, error); // Verificar los detalles del error
                    alert('Error enabling 2FA. Please try again.');
                }
            });

            window.Cancel2FaVerify = function() {
                window.location.reload();
            }

            window.Verify2Fa = function(btn, secretKey) {
                btn.disabled = true;
                $.ajax({
                    url: 'verify-2fa',
                    datatype: 'json',
                    method: "POST",
                    data: { secretKey },
                    success: function(response) {
                        btn.disabled = false;
                        alert('2-factor verification added successfully.');
                        $('#qr-container').hide();
                    },
                    error: function(xhr, status, error) {
                        console.log("Error Details: ", xhr.responseText, status, error); // Verificar los detalles del error
                        alert('Error verifying 2FA. Please try again.');
                        btn.disabled = false;
                    }
                });
            }
        });
    </script>
@endpush
