    <div class="container-banner" <?php echo 'style="background-color:'.$this->params->get('bannerBackgroundColor').'; "'; ?>>
        
       <?php if ($this->countModules('slider')): ?>
        
        <div class="row" style="width:inherit; height:inherit">
            <div class="large-12 columns slideshow-wrapper">
                <ul data-orbit="">
                    <?php if($imgUrl1){
                    echo '<a href="'.$imgLink1.'"><li><img src="'.$imgUrl1.'" /><div class="orbit-caption">'.$imgExcerpt1.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
                    
                    <?php if($imgUrl2){
                    echo '<a href="'.$imgLink2.'"><li><img src="'.$imgUrl2.'" /><div class="orbit-caption">'.$imgExcerpt2.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
			
                    <?php if($imgUrl3){
                    echo '<a href="'.$imgLink3.'"><li><img src="'.$imgUrl3.'" /><div class="orbit-caption">'.$imgExcerpt3.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
			
                    <?php if($imgUrl4){
                    echo '<a href="'.$imgLink4.'"><li><img src="'.$imgUrl4.'" /><div class="orbit-caption">'.$imgExcerpt4.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
			
                    <?php if($imgUrl5){
                    echo '<a href="'.$imgLink5.'"><li><img src="'.$imgUrl5.'" /><div class="orbit-caption">'.$imgExcerpt5.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
                    
                    <?php if($imgUrl6){
                    echo '<a href="'.$imgLink6.'"><li><img src="'.$imgUrl6.'" /><div class="orbit-caption">'.$imgExcerpt6.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
                    
                    <?php if($imgUrl7){
                    echo '<a href="'.$imgLink7.'"><li><img src="'.$imgUrl7.'" /><div class="orbit-caption">'.$imgExcerpt7.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
                    
                    <?php if($imgUrl8){
                    echo '<a href="'.$imgLink8.'"><li><img src="'.$imgUrl8.'" /><div class="orbit-caption">'.$imgExcerpt8.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
                    
                    <?php if($imgUrl9){
                    echo '<a href="'.$imgLink9.'"><li><img src="'.$imgUrl9.'" /><div class="orbit-caption">'.$imgExcerpt9.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
                    
                    <?php if($imgUrl10){
                    echo '<a href="'.$imgLink10.'"><li><img src="'.$imgUrl10.'" /><div class="orbit-caption">'.$imgExcerpt10.'</div></li></a>';
                    }
                    else
                    echo '';  ?>
                </ul>
            </div>
        </div>
        
        <?php else: ?>
        
        <div class="row">
            <div class="large-9 columns">
                <header>
                    <?php if ($option == 'com_content' && $view == 'article'): ?>
                        <?php if ($article_title): ?>
                            <h1 class="entry-title"><?php echo $article_title;  ?></h1>
                        <?php endif ?>
                    
                    
                    <?php endif ?>
                </header>
            </div>
        </div>
        
        <?php endif; ?>
        


    </div>