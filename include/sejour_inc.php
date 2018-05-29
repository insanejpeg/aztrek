<article class="action">
                   
                                <?php if(is_numeric($project["grade"])) : ?>
                                
                                    <?php for($i = 0; $i < 5; $i++) : ?>
                                            <?php if($project["grade"] > $i) : ?>
                                <i class="fa fa-star"></i>
                                            <?php else : ?>
                                <i class="fa fa-star-o"></i>
                                            <?php endif; ?>
                                     <?php endfor; ?>
                                <?php endif; ?>
                               
                </article>