<?php
/**
 * Template Name: Merca2 Americano
 * Description: Página de venta para Merca2 Americano
 */

get_header();
?>

<!-- Aquí va todo el contenido HTML que proporcionaste -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merca2 Americano - Productos Americanos con Financiamiento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Estilos basados en la bandera de Estados Unidos */
        .merca2-page {
            font-weight: unset !important;
            line-height: 1.6 !important;
            -moz-osx-font-smoothing: grayscale;
            word-wrap: break-word;
            margin: 0;
            -webkit-font-smoothing: antialiased;
            font-family: 'Montserrat', 'Roboto', 'Open Sans', sans-serif;
            color: #2C3E50;
            background-color: #ffffff;
            font-size: 18px;
        }

        .merca2-page * {
            box-sizing: border-box;
        }

        .merca2-page :root {
            --primary: #B22234;
            --secondary: #3C3B6E;
            --white: #FFFFFF;
            --gray: #cbd5e0;
            --black: #000000;
            --red: #e93d3d;
            --orange: #f6ad55;
            --yellow: #faf089;
            --green: #9ae6b4;
            --teal: #63b3ed;
            --indigo: #757BBD;
            --purple: #d6bcfa;
            --pink: #fbb6ce;
            --transparent: transparent;
            --overlay: rgba(0, 0, 0, 0.5);
        }

        /* Estilos personalizados */
        .merca2-page .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .merca2-page header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .merca2-page .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .merca2-page .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--secondary);
        }

        .merca2-page .logo span {
            color: var(--primary);
        }

        .merca2-page .hero {
            background: linear-gradient(rgba(60, 59, 110, 0.8), rgba(178, 34, 52, 0.8)), url('https://images.unsplash.com/photo-1601924994980-5b7e1a9b7a0d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
        }

        .merca2-page .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .merca2-page .hero p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .merca2-page .cta-button {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2rem;
            transition: all 0.3s;
            border: 2px solid var(--primary);
        }

        .merca2-page .cta-button:hover {
            background-color: transparent;
            color: var(--primary);
        }

        .merca2-page .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 50px 0;
        }

        .merca2-page .gallery-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .merca2-page .gallery-item:hover {
            transform: translateY(-10px);
        }

        .merca2-page .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .merca2-page section {
            padding: 80px 0;
        }

        .merca2-page .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.2rem;
            color: var(--secondary);
            position: relative;
        }

        .merca2-page .section-title:after {
            content: "";
            display: block;
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary), var(--primary));
            margin: 15px auto 0;
            border-radius: 2px;
        }

        .merca2-page .model-info {
            background-color: var(--white);
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            border-left: 5px solid var(--secondary);
            font-size: 1.1rem;
        }

        .merca2-page .model-info h3 {
            color: var(--secondary);
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .merca2-page .benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .merca2-page .benefit-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s;
            border-top: 4px solid var(--primary);
            font-size: 1.1rem;
        }

        .merca2-page .benefit-card:hover {
            transform: translateY(-10px);
        }

        .merca2-page .benefit-icon {
            font-size: 40px;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .merca2-page .options-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .merca2-page .option-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
            font-size: 1.1rem;
        }

        .merca2-page .option-card:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary), var(--primary));
        }

        .merca2-page .option-card h3 {
            color: var(--secondary);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .merca2-page .option-card .price {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary);
            margin: 15px 0;
        }

        .merca2-page .option-card ul {
            padding-left: 20px;
        }

        .merca2-page .option-card li {
            margin-bottom: 10px;
        }

        .merca2-page .service-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            margin-top: 30px;
            border: 2px dashed var(--primary);
            font-size: 1.1rem;
        }

        .merca2-page .service-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .merca2-page .service-card .price {
            font-size: 1.9rem;
            font-weight: 700;
            color: var(--secondary);
            margin: 15px 0;
        }

        .merca2-page .calculator-container {
            background-color: var(--white);
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            max-width: 800px;
            margin: 40px auto;
            border: 2px solid var(--secondary);
        }

        .merca2-page .calculator-title {
            text-align: center;
            color: var(--secondary);
            margin-bottom: 30px;
            font-size: 1.6rem;
        }

        .merca2-page .calculator-result {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
            border-left: 4px solid var(--primary);
        }

        .merca2-page .calculator-result h4 {
            color: var(--secondary);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .merca2-page .payment-option {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f1f3f4;
            border-radius: 5px;
        }

        .merca2-page .payment-option span {
            font-weight: 600;
        }

        .merca2-page .form-container {
            background-color: var(--white);
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid var(--secondary);
            font-size: 1.1rem;
        }

        .merca2-page .form-group {
            margin-bottom: 20px;
        }

        .merca2-page label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .merca2-page input, .merca2-page select, .merca2-page textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--gray);
            border-radius: 5px;
            font-size: 1.1rem;
        }

        .merca2-page .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .merca2-page .radio-option {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .merca2-page .faq-container {
            margin-top: 40px;
        }

        .merca2-page .faq-item {
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            overflow: hidden;
        }

        .merca2-page .faq-question {
            background-color: #f7fafc;
            padding: 15px 20px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.1rem;
        }

        .merca2-page .faq-answer {
            padding: 20px;
            background-color: white;
            border-top: 1px solid #e2e8f0;
            font-size: 1.1rem;
        }

        .merca2-page footer {
            background: linear-gradient(135deg, var(--secondary) 0%, #2a2a50 100%);
            color: white;
            padding: 40px 0;
            text-align: center;
            font-size: 1.1rem;
        }

        .merca2-page .address {
            margin-top: 20px;
            font-style: italic;
        }

        .merca2-page .social-links {
            margin-top: 20px;
        }

        .merca2-page .social-links a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .merca2-page .social-links a:hover {
            color: var(--primary);
        }

        .merca2-page .loading {
            display: none;
            text-align: center;
            margin-top: 20px;
        }

        .merca2-page .success-message {
            display: none;
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .merca2-page .hero h1 {
                font-size: 2.2rem;
            }
            
            .merca2-page .benefits, .merca2-page .options-container {
                grid-template-columns: 1fr;
            }
            
            .merca2-page .radio-group {
                flex-direction: column;
                gap: 10px;
            }
            
            .merca2-page {
                font-size: 16px;
            }
        }
    </style>
</head>

<div class="merca2-page">
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">Merca2<span>Americano</span></div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Productos Americanos con Financiamiento Accesible</h1>
            <p>Accede a productos de alta calidad de Estados Unidos sin pagar el costo completo al momento. ¡Comienza tu negocio hoy!</p>
            <a href="#formulario" class="cta-button">Aplica Ahora</a>
        </div>
    </section>

    <div class="container">
        <div class="image-gallery">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1601924994980-5b7e1a9b7a0d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Productos americanos">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Almacén de productos">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Emprendedores exitosos">
            </div>
        </div>
    </div>

    <section id="modelo">
        <div class="container">
            <h2 class="section-title">¿En qué consiste nuestro modelo?</h2>
            <div class="model-info">
                <p>En <strong>@merca2americano</strong>, ayudamos a que más personas en República Dominicana puedan acceder a productos de alta calidad nuevos y usados importados desde Estados Unidos sin tener que pagar el costo completo al momento.</p>
                
                <p><strong>Importante:</strong> Somos intermediarios entre usted y una empresa financiera aliada que es la que otorga el préstamo. <strong>NO solicitamos transferencias de dinero adelantado.</strong> El proceso es seguro y transparente.</p>
                
                <div class="benefits">
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="fas fa-box-open"></i></div>
                        <h3>Tú eliges el producto</h3>
                        <p>Selecciona entre una amplia variedad de productos americanos</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="fas fa-hand-holding-usd"></i></div>
                        <h3>Pagas un abono inicial</h3>
                        <p>Por ejemplo, RD$3,000 como mínimo para comenzar</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="fas fa-handshake"></i></div>
                        <h3>Empresa financiera aliada</h3>
                        <p>Una empresa externa cubre el saldo pendiente (nosotros somos intermediarios)</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="fas fa-shipping-fast"></i></div>
                        <h3>Recibes tu mercancía</h3>
                        <p>Comienza a negociar inmediatamente con tus productos</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon"><i class="fas fa-calendar-alt"></i></div>
                        <h3>Pagos flexibles</h3>
                        <p>Realiza pagos semanales o quincenales según tu conveniencia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="calculadora">
        <div class="container">
            <h2 class="section-title">Calculadora de Préstamos</h2>
            <div class="calculator-container">
                <div class="calculator-title">
                    Calcula tus pagos mensuales
                </div>
                <div class="calculator-result">
                    <h4>Ejemplo para una caja de RD$20,000 con abono inicial de RD$3,000</h4>
                    <div class="payment-option">
                        <span>6 cuotas quincenales:</span>
                        <span>RD$3,460 por quincena</span>
                    </div>
                    <div class="payment-option">
                        <span>8 cuotas quincenales:</span>
                        <span>RD$2,785 por quincena</span>
                    </div>
                    <p style="margin-top: 15px; font-style: italic;">
                        * Estos son ejemplos ilustrativos. Los montos finales pueden variar según el producto seleccionado.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="comprar" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="section-title">¿Cómo puedo comprar con Merca2 Americano?</h2>
            <p style="text-align: center; margin-bottom: 40px; font-size: 1.2rem;">Tienes dos opciones para comenzar:</p>
            
            <div class="options-container">
                <div class="option-card">
                    <h3><i class="fas fa-flag-usa" style="color: #B22234;"></i> Opción 1: Encarga productos desde Estados Unidos</h3>
                    <p>Puedes solicitar una caja de productos específicos como ropa, decoración navideña, electrónicos, etc.</p>
                    <div class="price">Inicial: $100 USD</div>
                    <ul>
                        <li><strong>Precio mínimo de caja:</strong> RD$20,000 (varía según mercancía)</li>
                        <li><strong>Tiempo de preparación:</strong> 4-7 días para armar tu caja personalizada</li>
                        <li><strong>Tiempo de envío:</strong> 20-25 días (una vez enviado, el tiempo de llegada no depende de nosotros)</li>
                        <li><strong>Debes abonar el inicial para garantizar la mercancía</strong></li>
                    </ul>
                </div>
                
                <div class="option-card">
                    <h3><i class="fas fa-warehouse" style="color: #3C3B6E;"></i> Opción 2: Escoge productos de nuestro almacén en RD</h3>
                    <p>Selecciona entre los productos que ya están disponibles en nuestro almacén en República Dominicana.</p>
                    <div class="price">Inicial: $50 USD</div>
                    <ul>
                        <li>Puedes comenzar a vender o usar tu mercancía de inmediato</li>
                        <li>Perfecto si necesitas productos rápidamente</li>
                        <li><strong>NO pagas nada hasta que tu préstamo sea aprobado</strong></li>
                        <li>El pago se realiza únicamente cuando vas a retirar la mercancía en nuestro almacén</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-card">
                <h3><i class="fas fa-bullhorn"></i> Servicio Adicional: Marketing Digital</h3>
                <p>¿Necesitas ayuda para promocionar tus productos? Te ofrecemos:</p>
                <ul>
                    <li>Manejo de redes sociales por 1 mes</li>
                    <li>Diseño de logo profesional</li>
                    <li>Creación de contenido visual atractivo</li>
                    <li>Estrategias de venta online</li>
                </ul>
                <div class="price">Solo RD$1,000 el primer mes</div>
                <p>¡Impulsa tu negocio con una presencia profesional en internet!</p>
            </div>
        </div>
    </section>

    <section id="preguntas">
        <div class="container">
            <h2 class="section-title">Preguntas Frecuentes</h2>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>¿Cuál es el precio mínimo de una caja?</span>
                    </div>
                    <div class="faq-answer">
                        <p>El precio mínimo de una caja es de RD$20,000, pero este valor puede variar según el tipo de mercancía que solicites.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>¿Cuánto tiempo tarda en llegar mi pedido desde Estados Unidos?</span>
                    </div>
                    <div class="faq-answer">
                        <p>Para la Opción 1 (productos desde USA): El proceso de armar tu caja personalizada toma entre 4-7 días. Una vez enviada, el tiempo de transporte es de 20-25 días. Ten en cuenta que una vez enviado el contenedor, el tiempo de llegada ya no depende de nosotros.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>¿Tengo que pagar algo antes de que mi préstamo sea aprobado?</span>
                    </div>
                    <div class="faq-answer">
                        <p>Para la Opción 2 (productos en almacén RD): NO. Solo pagas cuando tu préstamo ha sido aprobado y vas a retirar la mercancía. Para la Opción 1 (productos desde USA): Sí, debes abonar el inicial de $100 USD para garantizar tu mercancía.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>¿Ustedes son quienes prestan el dinero?</span>
                    </div>
                    <div class="faq-answer">
                        <p>NO. Somos intermediarios entre usted y una empresa financiera aliada que es la que otorga el préstamo. Nosotros nos encargamos de la logística y selección de productos.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>¿Dónde están ubicados?</span>
                    </div>
                    <div class="faq-answer">
                        <p>Nuestra dirección es: <strong>Calle Ferrera Rivas #4, Residencial Villa Tropicalia, Santo Domingo Este.</strong></p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>¿Qué incluye el servicio de marketing digital?</span>
                    </div>
                    <div class="faq-answer">
                        <p>Por solo RD$1,000 el primer mes, te ofrecemos: manejo completo de tus redes sociales, diseño de un logo profesional, creación de contenido visual atractivo y estrategias de venta online para impulsar tu negocio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="formulario" style="background-color: #f5f7fa;">
        <div class="container">
            <h2 class="section-title">¿Quieres aplicar? Llena este formulario</h2>
            
            <div class="form-container">
                <form id="application-form" action="https://formsubmit.co/maids4u.comllc@gmail.com" method="POST">
                    <input type="hidden" name="_subject" value="Nueva solicitud - Merca2 Americano">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_captcha" value="false">
                    
                    <div class="form-group">
                        <label for="nombre">Nombre y Apellido *</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="cedula">Número de Cédula *</label>
                        <input type="text" id="cedula" name="cedula" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="whatsapp">Número de WhatsApp *</label>
                        <input type="text" id="whatsapp" name="whatsapp" required placeholder="Ej: 809-123-4567">
                    </div>
                    
                    <div class="form-group">
                        <label for="direccion">Dirección Completa *</label>
                        <textarea id="direccion" name="direccion" rows="3" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>¿Tiene un negocio actualmente?</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="negocio_si" name="tiene_negocio" value="si">
                                <label for="negocio_si">Sí</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="negocio_no" name="tiene_negocio" value="no">
                                <label for="negocio_no">No</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group" id="tipo-negocio-group" style="display: none;">
                        <label for="tipo_negocio">¿Qué tipo de negocio tiene? (Qué vende)</label>
                        <input type="text" id="tipo_negocio" name="tipo_negocio">
                    </div>
                    
                    <div class="form-group" id="instagram-group" style="display: none;">
                        <label for="instagram">Cuenta de Instagram del negocio (opcional)</label>
                        <input type="text" id="instagram" name="instagram" placeholder="@tuinstagram">
                    </div>
                    
                    <div class="form-group" id="local-group" style="display: none;">
                        <label>¿El local es propio?</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="local_si" name="local_propio" value="si">
                                <label for="local_si">Sí</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="local_no" name="local_propio" value="no">
                                <label for="local_no">No</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group" id="renta-group" style="display: none;">
                        <label>¿Paga renta del local?</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="renta_si" name="paga_renta" value="si">
                                <label for="renta_si">Sí</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="renta_no" name="paga_renta" value="no">
                                <label for="renta_no">No</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group" id="monto-renta-group" style="display: none;">
                        <label for="monto_renta">¿Cuánto paga de renta mensualmente? (RD$)</label>
                        <input type="number" id="monto_renta" name="monto_renta" placeholder="Ej: 5000">
                    </div>
                    
                    <div class="form-group">
                        <label>¿Actualmente trabaja?</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="trabaja_si" name="trabaja" value="si">
                                <label for="trabaja_si">Sí</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="trabaja_no" name="trabaja" value="no">
                                <label for="trabaja_no">No</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group" id="ingresos-group" style="display: none;">
                        <label for="ingresos">¿Cuánto gana aproximadamente mensualmente? (en RD$)</label>
                        <select id="ingresos" name="ingresos">
                            <option value="">Seleccione un rango</option>
                            <option value="menos-10000">Menos de RD$10,000</option>
                            <option value="10000-20000">RD$10,000 - RD$20,000</option>
                            <option value="20000-30000">RD$20,000 - RD$30,000</option>
                            <option value="30000-50000">RD$30,000 - RD$50,000</option>
                            <option value="mas-50000">Más de RD$50,000</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="mercancia">¿Qué tipo de mercancía le interesa? *</label>
                        <select id="mercancia" name="mercancia" required>
                            <option value="">Seleccione una opción</option>
                            <option value="ropa">Ropa y calzado</option>
                            <option value="electronica">Electrónicos</option>
                            <option value="hogar">Artículos para el hogar</option>
                            <option value="decoracion">Decoración</option>
                            <option value="herramientas">Herramientas</option>
                            <option value="deportes">Artículos deportivos</option>
                            <option value="juguetes">Juguetes</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>¿Tiene el inicial para la caja de mercancía?</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="inicial_si" name="tiene_inicial" value="si">
                                <label for="inicial_si">Sí</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="inicial_no" name="tiene_inicial" value="no">
                                <label for="inicial_no">No</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>¿Qué opción prefiere?</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="opcion1" name="opcion" value="opcion1">
                                <label for="opcion1">Caja con productos específicos desde USA ($100 USD)</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="opcion2" name="opcion" value="opcion2">
                                <label for="opcion2">Productos del almacén en RD ($50 USD)</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="comentarios">Comentarios adicionales</label>
                        <textarea id="comentarios" name="comentarios" rows="4"></textarea>
                    </div>
                    
                    <div class="loading" id="loading">
                        <p><i class="fas fa-spinner fa-spin"></i> Enviando solicitud...</p>
                    </div>
                    
                    <div class="success-message" id="success-message">
                        <p><i class="fas fa-check-circle"></i> ¡Gracias por tu solicitud! Nos pondremos en contacto contigo pronto por WhatsApp.</p>
                    </div>
                    
                    <button type="submit" class="cta-button" style="width: 100%;" id="submit-button">Enviar Solicitud</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>© 2023 Merca2 Americano - Todos los derechos reservados</p>
            <p>Contacto: @merca2americano</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="address">
                <p><strong>Dirección:</strong> Calle Ferrera Rivas #4, Residencial Villa Tropicalia, Santo Domingo Este</p>
            </div>
        </div>
    </footer>

    <script>
        // Mostrar/ocultar campos condicionales
        document.addEventListener('DOMContentLoaded', function() {
            const negocioSi = document.getElementById('negocio_si');
            const negocioNo = document.getElementById('negocio_no');
            const tipoNegocioGroup = document.getElementById('tipo-negocio-group');
            const instagramGroup = document.getElementById('instagram-group');
            const localGroup = document.getElementById('local-group');
            const rentaGroup = document.getElementById('renta-group');
            const montoRentaGroup = document.getElementById('monto-renta-group');
            
            const trabajaSi = document.getElementById('trabaja_si');
            const trabajaNo = document.getElementById('trabaja_no');
            const ingresosGroup = document.getElementById('ingresos-group');
            
            const rentaSi = document.getElementById('renta_si');
            const rentaNo = document.getElementById('renta_no');
            
            // FAQ interactivo
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            function toggleNegocioFields() {
                if (negocioSi.checked) {
                    tipoNegocioGroup.style.display = 'block';
                    instagramGroup.style.display = 'block';
                    localGroup.style.display = 'block';
                    rentaGroup.style.display = 'block';
                } else {
                    tipoNegocioGroup.style.display = 'none';
                    instagramGroup.style.display = 'none';
                    localGroup.style.display = 'none';
                    rentaGroup.style.display = 'none';
                    montoRentaGroup.style.display = 'none';
                }
            }
            
            function toggleTrabajoFields() {
                if (trabajaSi.checked) {
                    ingresosGroup.style.display = 'block';
                } else {
                    ingresosGroup.style.display = 'none';
                }
            }
            
            function toggleRentaFields() {
                if (rentaSi.checked) {
                    montoRentaGroup.style.display = 'block';
                } else {
                    montoRentaGroup.style.display = 'none';
                }
            }
            
            negocioSi.addEventListener('change', toggleNegocioFields);
            negocioNo.addEventListener('change', toggleNegocioFields);
            
            trabajaSi.addEventListener('change', toggleTrabajoFields);
            trabajaNo.addEventListener('change', toggleTrabajoFields);
            
            rentaSi.addEventListener('change', toggleRentaFields);
            rentaNo.addEventListener('change', toggleRentaFields);
            
            // FAQ functionality
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const isVisible = answer.style.display === 'block';
                    
                    // Cerrar todas las respuestas
                    document.querySelectorAll('.faq-answer').forEach(ans => {
                        ans.style.display = 'none';
                    });
                    
                    // Abrir la respuesta clickeada si no estaba visible
                    if (!isVisible) {
                        answer.style.display = 'block';
                    }
                });
            });
            
            // Manejar el envío del formulario
            document.getElementById('application-form').addEventListener('submit', function(e) {
                const submitButton = document.getElementById('submit-button');
                const loading = document.getElementById('loading');
                const successMessage = document.getElementById('success-message');
                
                // Mostrar loading
                submitButton.style.display = 'none';
                loading.style.display = 'block';
                
                // El formulario se enviará normalmente a FormSubmit
                // Después de 3 segundos, mostrar mensaje de éxito (simulación)
                setTimeout(function() {
                    loading.style.display = 'none';
                    successMessage.style.display = 'block';
                    
                    // Resetear formulario después de 5 segundos
                    setTimeout(function() {
                        document.getElementById('application-form').reset();
                        successMessage.style.display = 'none';
                        submitButton.style.display = 'block';
                    }, 5000);
                }, 3000);
            });
        });
    </script>
</div>

<?php
get_footer();
?>