<div class="it-header-slim-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="it-header-slim-wrapper-content">
                    <a class="d-lg-block navbar-brand" href="<?php echo dci_get_option("url_sito_regione"); ?>"aria-label="Vai al portale <?php echo dci_get_option("nome_regione"); ?> - link esterno - apertura nuova scheda" title="Vai al portale <?php echo dci_get_option("nome_regione"); ?>"><?php echo dci_get_option("nome_regione"); ?></a>
                    <div class="it-header-slim-right-zone">
                        <div class="nav-item dropdown d-none">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Selezione lingua: lingua selezionata</span>
                                <span>ITA</span>
                                <svg class="icon">
                                    <use href="#it-expand"></use>
                                </svg>
                            </a>
                            <div class="dropdown-menu">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="link-list-wrapper">
                                            <ul class="link-list">
                                                <li>
                                                    <a class="dropdown-item list-item" href="#"><span>ITA <span class="visually-hidden">selezionata</span></span></a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item list-item" href="#"><span>ENG</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if(!is_user_logged_in()) {
                            get_template_part("template-parts/header/header-anon");
                        }else{
                            get_template_part("template-parts/header/header-logged");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
