<?php   
    $title=urlencode($titre);
    $url=urlencode("lien de l'article".$id_art);
    $image=urlencode("lien de la photo de couverture de l'image l'article".$couverture);

    
    
    ?>
    <div class="tags-section">
        <ul class="tags lab-ul">
        </ul>
        <ul class="lab-ul social-icons">
            <li>
                <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)" class="facebook"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a href="http://twitter.com/share?text='<?php echo $title; ?>'&amp;counturl='<?php echo $url; ?>'" class="twitter"><i class="icofont-twitter"></i></a>
            </li>
            <li>
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=<?php echo $title; ?>&source=https://antabenin.tech" class="linkedin"><i class="icofont-linkedin"></i></a>
            </li>
            <li>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            </li>
            <li>
                <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
            </li>
        </ul> 
    </div>