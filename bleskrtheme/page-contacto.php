
<?php
/**
 * 
 *
 * @package  gggg
 */

get_header();
?>

<main id="primary" class="site-main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header><div class="entry-content">
            

            <div class="contact-form">
                <h2>Déjanos tu mensaje</h2>
                <form action="#" method="post">
                    <p>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </p>
                    <p>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                    </p>
                    <p>
                        <button type="submit">Enviar Mensaje</button>
                    </p>
                </form>
                <p class="form-notice">Gracias por contactar con nosotros.</p>
            </div></div>
    </article></main><?php
get_footer();
