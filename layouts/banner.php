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
                        <?php if ($category == 'blog' || $category == 'News & Info'): ?>
                            <p>Published <?php echo $article_created; ?></p>
                            <p>by <span class="author"><?php echo $author; ?></span></p>
                            <p>Hello world!</p>
                    
                    
                    
                        <?php endif ?>
                    <?php endif ?>
                </header>
            </div>
        </div>
        
        <?php endif; ?>
        


    </div>