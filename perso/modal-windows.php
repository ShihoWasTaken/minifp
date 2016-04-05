<!-- Fenêtre modale contact -->
<div id="contact" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Me contacter</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-vertical" method="post" action=""  >
                    <div class="form-group">
                        <label for="name">Nom et Prénom: </label>
                        <input type="text" placeholder="Dupont Jean" class="form-control" id="name" name="name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone (format national): </label>
                        <input type="tel" pattern="[0-9]{10}" placeholder="0123456789" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse mail: </label>
                        <input type="email" placeholder="prenom.nom@domaine.com" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Votre message: </label>
                        <textarea class="form-control" id="message" name="message" rows="8"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit" id="submit" name="submit">Envoyer</button>
                </form>
            </div>    
            <!--
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
-->
        </div>

    </div>
</div>
<!-- Fin fenêtre modale contact -->

<?php $modals = simplexml_load_file('portfolio-modal.xml'); ?>
<?php $count_portfolio_modal = 1; ?>
<?php foreach ($modals as $modal): ?>
<div id="portfolio-info-<?php echo $count_portfolio_modal; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $modal->titre; ?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12 modal-table-container">
                                <table>
                                    <tr>
                                        <td><strong>Période:</strong>&nbsp;</td>
                                        <td><?php echo $modal->periode; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Poste:</strong>&nbsp;</td>
                                        <td><?php echo $modal->poste; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Compétences:</strong>&nbsp;</td>
                                        <td>
                                            <?php foreach ($modal->skill as $skill): ?>
                                            <span class="badge"><?php echo $skill; ?></span>
                                            <?php endforeach; ?>                                            
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-10 col-sm-4 col-md-12 col-lg-12 col-xs-push-1 col-md-push-0 col-sm-push-0 col-lg-push-0 modal-links">
                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                    <?php foreach ($modal->bouton as $bouton): ?>
                                    <a target="_blank" href="<?php echo $bouton->link; ?>" class="btn btn-default">
                                        <i class="fa fa-<?php echo $bouton->icone; ?>"></i>&nbsp;<?php echo $bouton->titre; ?>
                                    </a>
                                    <?php endforeach; ?>
                                    <?php foreach ($modal->boutonGroupe as $btnGrp): ?>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-<?php echo $btnGrp->icone; ?>"></i>&nbsp;<?php echo $btnGrp->titre; ?>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <?php foreach ($btnGrp->element as $element): ?>
                                            <?php if ($element['category'] == 'bouton'): ?>
                                            <li>
                                                <a target="_blank" href="<?php echo $element->link; ?>">
                                                    <i class="fa fa-<?php echo $element->icone; ?>"></i>&nbsp;<?php echo $element->titre; ?>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($element['category'] == 'divider'): ?>
                                            <li role="separator" class="divider"></li>
                                            <?php endif; ?>
                                            <?php if ($element['category'] == 'header'): ?>
                                            <li class="dropdown-header"><?php echo $element->name; ?></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php endforeach; ?>
                                </div>                                
                            </div>                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <a href="images/<?php echo $modal->image->link; ?>" rel="lightbox" title="<?php echo $modal->image->titre; ?>">
                            <img src="images/<?php echo $modal->image->link; ?>"/>
                        </a>                        
                    </div>
                </div>
                <div class="paragraphs">
                    <?php foreach ($modal->paragraphe as $paragraphe): ?>
                    <p><?php echo $paragraphe; ?></p>                        
                    <?php endforeach; ?>
                </div>
            </div>                        
            <div class="modal-footer">                
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>                        
        </div><!-- Fin Modal content-->

    </div>
</div>
<?php $count_portfolio_modal++; ?>
<?php endforeach; ?>

