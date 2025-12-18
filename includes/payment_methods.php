<style>
    .payment-wrapper {
        margin-top: 40px;
        margin-bottom: 40px;
        font-family: 'Outfit', sans-serif;
    }

    .payment-header h2 {
        color: #0c0d50; /* Primary Color approximation */
        font-size: 2rem;
        margin-bottom: 25px;
        font-weight: 800;
    }

    .payment-subtitle {
        font-size: 1.1rem;
        color: #000;
        font-weight: 500;
        margin-bottom: 20px;
        margin-top: 40px;
    }
    
    .payment-subtitle:first-of-type {
        margin-top: 0;
    }

    .payment-card {
        border: 2px dashed #999;
        border-radius: 10px;
        padding: 40px 20px;
        text-align: center;
        background: #fff;
    }

    .payment-card img {
        height: 60px; /* Adjust based on image aspect ratio */
        width: auto;
        margin: 0 auto 20px auto;
        display: block;
    }

    .payment-card p {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 25px;
        line-height: 1.4;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .payment-action-btn {
        background-color: #fca311; /* Golden/Orange */
        color: #0c0d50; /* Navy text */
        font-weight: 800;
        text-transform: uppercase;
        padding: 12px 30px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        display: inline-block;
        transition: transform 0.2s;
    }
    
    .payment-action-btn:hover {
        transform: scale(1.05);
        background-color: #e5940e;
    }
    
    .bcp-title {
        color: #002a8d; /* BCP Blue */
        font-weight: 900;
        font-size: 1.4rem;
        margin-bottom: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5px;
    }
    
    .account-title {
        font-weight: 800;
        font-size: 1.2rem;
        text-transform: uppercase;
        margin-bottom: 10px;
        display: block;
    }
    
    .account-number {
        font-size: 1.5rem;
        color: #555;
        margin-bottom: 15px;
        display: block;
    }
    
    .account-holder {
        font-size: 1.1rem;
        line-height: 1.4;
    }
    
    .account-holder strong {
        color: #000;
    }

</style>

<section class="payment-wrapper">
    <div class="payment-header">
        <h2>Métodos de Pago</h2>
    </div>

    <!-- Visa Section -->
    <h3 class="payment-subtitle">Compra al instante con tarjeta de débito o crédito</h3>
    <div class="payment-card">
        <img src="<?php echo $rootPath; ?>assets/img/pagos/metodos-de-pago-visa.png" alt="Visa">
        <p>Paga ahora este curso por la pasarela de pagos de Benjamin Franklin</p>
        <a href="<?php echo $rootPath; ?>index.php#contacto" class="payment-action-btn">COMPRAR AHORA</a>
    </div>

    <!-- BCP Section -->
    <h3 class="payment-subtitle">Pagos vía depósito a nivel nacional (Perú)</h3>
    <div class="payment-card">
        <img src="<?php echo $rootPath; ?>assets/img/pagos/metodos-de-pago-bcp.png" alt="BCP">
        
        <span class="account-title">NÚMERO DE CUENTA</span>
        <span class="account-number">191-2516009-0-31</span>
        <p class="account-holder">
            <strong>Titular:</strong> Corporación Educativa Benjamin Franklin
        </p>
    </div>
</section>
