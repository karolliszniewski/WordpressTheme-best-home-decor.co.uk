<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head() ?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document2</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/styles.css?2'; ?>" />
</head>

<body>
  <header>
    <nav class="navbar">
      <span class="navbar__toggle">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M35 30H5V26.6667H35V30ZM35 21.6667H5V18.3333H35V21.6667ZM35 10V13.3333H5V10H35Z" fill="#FCFCFC" />
        </svg>
      </span>

      <div class="navbar__logo"><span>Go</span>Best</div>

      <span class="navbar__account">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20 20C23.6833 20 26.6667 17.0167 26.6667 13.3333C26.6667 9.64999 23.6833 6.66666 20 6.66666C16.3167 6.66666 13.3333 9.64999 13.3333 13.3333C13.3333 17.0167 16.3167 20 20 20ZM20 23.3333C15.55 23.3333 6.66666 25.5667 6.66666 30V33.3333H33.3333V30C33.3333 25.5667 24.45 23.3333 20 23.3333Z" fill="#FCFCFC" />
        </svg>
      </span>

      <?php
      wp_nav_menu(array(
        'theme_location' => 'custom-menu',
        'menu_class' => 'custom-menu-class', // Opcjonalne: Dodatkowa klasa dla menu
        // Dodatkowe opcje menu można dodać tutaj
      ));

      ?>


    </nav>
  </header>

  <article class="article">
    <header>
      <img class="article__feature-image" src="<?php echo get_template_directory_uri() . '\inc\media\feature.webp' ?>" alt="steampunk street" srcset="" />
    </header>

    <!-- Treść artykułu -->

    <section class="article__movies">
      <header class="article__movies-title">some movie title</header>
      <img class="article__movies-image" src="<?php echo get_template_directory_uri() . '\inc\media\hq720.webp' ?>" alt="steampunk street" srcset="" />
      <p class="article__movies-description">
        This teen-oriented horror film tells the story of a group of young
        boys who attend a prestigious all-male boarding school. They soon
        realize that the school is home to a coven of witches, and they must
        use their special powers to stop them from taking over the world. If
        you are from one of these countries you can watch without changing ip:
        If your country is not listed, you can change your ip using VPN, the
        list of NordVPN countries for this title is:
      </p>
    </section>

    <section class="article__movies">
      <header class="article__movies-title">1. The Prestige ( 2006 )</header>
      <img class="article__movies-image" src="<?php echo get_template_directory_uri() . '\inc\media\hq720.webp' ?>" alt="steampunk street" srcset="" />
      <p class="article__movies-description">
        This teen-oriented horror film tells the story of a group of young
        boys who attend a prestigious all-male boarding school. They soon
        realize that the school is home to a coven of witches, and they must
        use their special powers to stop them from taking over the world. If
        you are from one of these countries you can watch without changing ip:
        If your country is not listed, you can change your ip using VPN, the
        list of NordVPN countries for this title is:
      </p>
    </section>


    <section class="article__movies">
      <header class="article__movies-title">2. Sherlock Holmes ( 2009 )</header>
      <img class="article__movies-image" src="<?php echo get_template_directory_uri() . '\inc\media\sherlock.webp' ?>" alt="steampunk street" srcset="" />
      <p class="article__movies-description">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam tempora nulla debitis sint odio, reprehenderit doloremque neque iusto omnis corrupti at vel. Quis repellat in ipsa impedit optio aspernatur neque reiciendis quidem facilis temporibus doloribus nobis et, ab exercitationem culpa consectetur asperiores ipsam, sunt quisquam amet quia voluptatum! Et repellendus doloribus possimus architecto, eligendi culpa veritatis exercitationem recusandae ullam illum! Ad fugiat beatae sequi veritatis, inventore voluptas nostrum corporis tempora. Quibusdam neque ullam hic aliquam rem ab tenetur voluptates commodi animi, pariatur eos beatae ducimus obcaecati dolore fugiat iusto exercitationem impedit soluta? Officiis, nulla nam mollitia ab dolorum accusantium voluptatum provident odit obcaecati libero neque fugiat illo rem. In quae porro similique assumenda eligendi iure sapiente ipsa itaque, eaque odit mollitia quod sint voluptas totam, magni voluptatem a nesciunt optio vitae illum corrupti aspernatur iusto, aut voluptates? Veritatis atque ab facilis repellat consequuntur, unde laboriosam molestiae delectus eveniet nam qui odio! Voluptatem, quasi. Quos laborum fugit beatae assumenda, optio libero maiores est unde ducimus quaerat consequuntur placeat consequatur nemo iure laudantium suscipit fuga aperiam a possimus quam ea, voluptatibus accusantium? Ea delectus ipsam neque illum magni at nisi minus fuga iure qui repellendus placeat vel, adipisci unde! Laudantium, alias ex consectetur nulla ducimus iste eligendi dolore, explicabo, ad earum quas praesentium a repudiandae! Explicabo sint quod quidem ipsam a id accusamus officiis cupiditate cumque eveniet repellendus architecto incidunt, ad tempora sequi! Tempore vel dolorem magni magnam labore praesentium consequuntur et quos numquam? Cupiditate sit nostrum corrupti, eveniet officiis quod repellat alias excepturi voluptas quam! Provident exercitationem, odio error et esse ullam quibusdam modi quos aspernatur nisi iste debitis qui alias quasi illum quidem facere! Itaque, nisi! Aliquam ipsa cumque possimus officia natus qui odio numquam, repellendus maiores temporibus beatae nam. Esse iste non iusto nostrum, numquam accusamus cupiditate distinctio pariatur consequuntur voluptatibus nemo perspiciatis, totam inventore? Sequi quia impedit minima libero qui ullam nesciunt optio sapiente doloremque. Perferendis totam accusamus nulla at tempore cum obcaecati placeat dolore eum. Animi recusandae voluptas itaque sapiente molestias deleniti quo magni nulla doloremque alias? Libero consectetur accusantium sunt, id modi quae exercitationem dolore quia a culpa eum autem perferendis? Corporis consectetur sapiente magni saepe expedita, obcaecati amet cupiditate adipisci similique ducimus. At voluptatum, consequuntur libero dolore itaque incidunt similique doloremque labore, nulla deserunt id debitis excepturi eligendi vitae ex doloribus dolor voluptates distinctio esse optio suscipit animi sapiente et cum. Unde, consequatur repudiandae autem, dicta maiores non quo impedit dolorum blanditiis necessitatibus est quod debitis pariatur sit. Similique, nihil? Laudantium aspernatur pariatur, quis illum nam tenetur ipsum velit soluta quia, consequuntur expedita odio fuga quasi blanditiis animi repellat ullam fugit quae corrupti, qui saepe dicta laboriosam! Excepturi necessitatibus neque ab. Minima necessitatibus explicabo omnis quia repellat dolores temporibus, alias voluptatum, quis aliquid obcaecati cum? Sunt culpa asperiores consectetur, neque tempore esse nesciunt! Inventore nesciunt voluptatum, non iste odio necessitatibus officia facilis, numquam optio quod ratione illum corporis sequi delectus quia vel illo. Cum maiores optio sequi consequatur harum ab quaerat voluptatibus? Dicta eos ipsum distinctio mollitia at in nemo, aut voluptates dignissimos nihil tenetur fuga cumque dolor repellat eveniet. Inventore cupiditate exercitationem itaque ipsa, commodi recusandae perspiciatis optio facere accusantium doloremque fugit minus libero, totam provident temporibus quaerat quae excepturi tenetur et nobis rem expedita? Possimus animi laboriosam provident, laborum odio quae excepturi assumenda aspernatur hic ex tempora consequuntur eligendi aperiam? A incidunt hic blanditiis quas beatae enim, ipsa veritatis nulla. Illo est, vitae velit placeat esse voluptatibus vel consequatur fugit consequuntur magnam reprehenderit amet, culpa, explicabo architecto laboriosam. Beatae earum doloremque numquam inventore nobis iusto fuga quaerat doloribus laudantium obcaecati voluptates quis, asperiores perspiciatis nemo praesentium! Debitis voluptatem magni dolore modi obcaecati error. Molestiae reiciendis debitis, quo error sit sunt a facere doloremque distinctio ipsam reprehenderit laudantium, cumque sapiente officiis, aliquam consequatur accusamus sed iure ad eum? Totam possimus dolores praesentium omnis, delectus et pariatur inventore voluptate dignissimos velit id quasi consequuntur deserunt impedit laboriosam quidem sint unde atque vel consectetur optio! Sit earum quis mollitia rem. Vero odio, inventore nisi provident quis quam fugiat quo? Nihil maiores qui vel, atque et consectetur molestias? Modi recusandae dolorum sunt fugiat nostrum animi voluptatibus aut voluptatum perferendis veniam nihil, possimus illum cupiditate debitis, sit labore sapiente. Quibusdam blanditiis magni atque, saepe harum illum consequuntur molestiae! Facilis pariatur quae perspiciatis facere, dolorem laborum delectus quas non commodi asperiores nobis nesciunt cupiditate ut aliquid dolores natus dolore? Qui sed aperiam debitis dolorem recusandae dignissimos minima, a amet quis, quam ea aut est quisquam adipisci quas eveniet neque hic accusantium doloremque eius pariatur ab iste obcaecati sit. Itaque, unde. Eos officiis amet aliquid quos natus alias iste aspernatur ducimus animi placeat numquam voluptates porro sit voluptas officia rem ad, tempore cupiditate rerum magnam non exercitationem provident. Modi quaerat magni blanditiis atque, totam iure fuga veniam dolorum, esse voluptate perspiciatis reprehenderit. Ex ipsa itaque, soluta perspiciatis sit vel dignissimos id atque cum a tempora odio quis ipsum quidem nobis obcaecati? Eveniet illo nobis vitae ipsam sit doloribus odio expedita, fuga vel numquam, laudantium est, in voluptatum? Impedit dicta cum suscipit neque temporibus fugit illum odit quisquam! Explicabo quibusdam adipisci ad eum similique fuga repudiandae unde, ratione mollitia ipsa aperiam, quia eaque consectetur itaque dolorum deleniti exercitationem distinctio porro nisi delectus ex. A, quod architecto omnis ipsa facere in veritatis saepe assumenda atque quas voluptatem nostrum adipisci sed eaque hic dolorem enim voluptatum eum! Vero possimus non saepe quod delectus ratione, nihil maxime odit nostrum, maiores dolorum recusandae, repellendus soluta exercitationem quas tenetur dolores consequatur sed quam provident fugiat totam? Itaque rerum omnis tempore totam numquam incidunt quo facere eos eum assumenda, aspernatur, magni qui vel nihil nostrum alias veniam blanditiis non velit quis eaque ullam cumque voluptates est! Neque aspernatur, veniam delectus, iusto maxime porro ducimus totam enim distinctio, id iure harum. Quam dolores placeat laudantium, voluptatem impedit possimus labore temporibus unde eaque qui consequuntur blanditiis excepturi dolore aperiam vitae distinctio officia magnam incidunt, accusantium soluta, libero tempora porro. Alias repellat suscipit nesciunt omnis nulla velit quisquam est provident possimus ex quaerat voluptatem ipsam sed, repellendus architecto neque impedit amet quibusdam quis atque commodi, doloremque id laudantium vitae. Velit molestias dolorem omnis eligendi minima recusandae esse illum fuga, amet ea labore provident facilis iusto inventore consectetur, adipisci repellat repudiandae dolore eveniet expedita sit? Quis rem est asperiores natus tempora beatae in blanditiis soluta ducimus, provident repudiandae odit, eveniet accusamus nemo nisi architecto! Consectetur corporis enim ullam reiciendis amet odit, vel delectus voluptate. Accusantium nostrum consequuntur sequi, cumque ducimus, molestiae dolore necessitatibus molestias nemo laboriosam harum cum illo quibusdam quam voluptatum vero debitis repellendus nihil explicabo. Ab doloremque sunt incidunt inventore corporis, ea, amet ipsa repudiandae animi odio in, eos et rerum dolores iusto suscipit? Aperiam veniam dolor officia consectetur nihil deleniti quos nobis, corporis aut, iste ipsam reprehenderit ipsum maiores amet ut beatae corrupti! Voluptatum, odio sit quaerat nostrum sint recusandae, ullam dolorem quod dicta pariatur voluptatibus ducimus, dignissimos quas iste? Sapiente repellendus, id impedit eveniet exercitationem nobis dolores eius at cum nihil accusamus voluptates enim dignissimos natus tempora obcaecati quia tempore hic? Nihil voluptas distinctio quas laborum accusantium voluptate corporis ab magnam? Reprehenderit quod mollitia labore dolores! Cupiditate aliquid unde doloribus sed itaque? Aliquid, itaque? Unde magnam itaque debitis cupiditate quisquam. Iusto optio esse cum blanditiis consequuntur, sunt nemo fugit dolore aut, assumenda earum amet ipsum voluptates ipsa illo labore, incidunt eius repudiandae repellendus similique in illum quaerat provident? Cumque ipsa hic saepe nisi veniam dicta accusantium? Voluptatibus blanditiis delectus ipsam architecto sint numquam. Repudiandae accusantium recusandae corrupti veniam, iste nostrum error pariatur quod magnam cum at, illo quibusdam odio sapiente. Quod quas reprehenderit, nesciunt, rerum qui temporibus alias et saepe porro aliquid fugiat molestias doloribus nobis dolore inventore. Ratione, labore? Consequatur ut nostrum, fuga quasi sunt ipsum in facilis! Nam sint labore ipsum unde recusandae modi eius ipsa ullam expedita sed deleniti, error voluptate, harum ratione debitis doloremque! Rerum, ipsum. Tenetur asperiores nostrum quasi provident est enim laborum minima fugiat necessitatibus ullam aspernatur illo, optio in eaque quis accusantium quos repellendus similique minus? At repellat temporibus eaque omnis voluptas tempore reprehenderit corrupti, ex commodi, repellendus unde inventore cupiditate veniam doloremque tenetur. Maxime dolorem corporis, debitis est eos recusandae dolore voluptate magni provident error fuga. Aspernatur, ratione. Minus, excepturi, consequatur est aspernatur voluptatibus quas accusamus ex minima, ratione aperiam explicabo unde a perferendis nobis sed fugit modi voluptatem beatae impedit commodi in odit libero! Cumque in consectetur error ab officia quisquam officiis laboriosam fugiat odit similique? Quis incidunt repellendus eaque aliquid esse praesentium accusamus temporibus impedit dignissimos, provident saepe consectetur earum beatae? Nostrum, pariatur minus suscipit optio, soluta commodi exercitationem aperiam facilis modi ea illum hic, iusto dolores. Unde temporibus expedita pariatur quo modi quia odio, non nobis suscipit inventore impedit. Nesciunt quis porro atque pariatur harum tenetur, cumque ut vel magni dolor perspiciatis aspernatur ipsum iusto eum, maiores repudiandae error fuga iure, odit nulla unde? Veritatis maiores commodi, aspernatur tempora eum magni quae velit temporibus quod deleniti nemo possimus labore illum dignissimos optio saepe alias accusantium! Consequatur voluptate iusto, ullam natus odio reprehenderit molestias dolore praesentium, vel libero vitae ex optio nesciunt ea fugit. Fugit nobis praesentium nemo reiciendis ducimus. Architecto libero nam nemo incidunt maxime laudantium optio nesciunt, odit iste numquam. Magnam velit aperiam, vero expedita vel molestiae voluptatibus maxime optio voluptatum deserunt. Inventore corrupti doloribus facere mollitia eligendi nobis amet ut rerum iusto officia. Nesciunt, eos inventore possimus mollitia provident suscipit vel magni pariatur voluptatem, rerum illum consequatur cum ut placeat modi a maxime commodi reiciendis. Eius distinctio officiis fugit iusto, labore vitae perferendis quibusdam iste rerum explicabo nihil doloremque eum cumque sint possimus voluptas et enim vero, illum ipsum consequuntur magni quisquam! Magnam similique tempore repudiandae, doloremque numquam qui, quisquam laborum expedita totam voluptates, incidunt consequatur commodi? Natus cumque fugiat officiis velit, neque vitae enim maiores veniam voluptas sed autem aliquid totam fugit voluptate rerum! Quidem ea perspiciatis qui voluptates mollitia atque, harum nisi delectus consequatur totam excepturi officiis, vel cum, fugiat iure iste minus. Consequuntur, alias? Itaque cupiditate sit ducimus nobis consequatur eum reiciendis in cum, earum temporibus nam quibusdam ex. Reiciendis, dolorum. Tempore, vitae? Error sint id doloribus alias? Pariatur eum quod excepturi voluptas aliquam impedit accusamus, commodi modi ex, voluptatum cumque iusto beatae recusandae perferendis itaque deleniti enim sed debitis, praesentium nostrum! Nesciunt dolore asperiores eligendi unde molestias reiciendis aspernatur tenetur itaque assumenda incidunt? Quod consequatur dolorum ullam aspernatur sapiente commodi rerum animi officiis, inventore eligendi officia ipsam magnam vero necessitatibus sint optio unde omnis vel ducimus molestias quidem? Quibusdam natus et nihil numquam corporis dolor, iure explicabo sint perferendis facere non nulla magni. Temporibus ipsum voluptatem aperiam nesciunt qui tempora dignissimos est dolores. Accusantium magni aut deleniti reprehenderit qui? Fuga excepturi aperiam reiciendis obcaecati inventore modi incidunt in nisi sunt. Autem dignissimos aspernatur, dolorem ratione quos ullam praesentium id laboriosam, cum inventore aut officia asperiores animi repellat fugit in, molestias aliquam at. Earum sapiente minus odit consequatur, ad mollitia veniam perspiciatis sed iste sunt ipsa, delectus ducimus? Dolorem ut et illo voluptas natus quam corporis? Provident eligendi natus unde fugiat tenetur, quas sint praesentium ducimus dolore, recusandae ab perspiciatis eaque voluptatem asperiores? Explicabo quos recusandae voluptatem consectetur aliquid unde voluptates consequuntur quam! Sit inventore veritatis itaque perferendis recusandae cupiditate officia quas voluptas architecto, culpa fugit dicta quos necessitatibus molestias exercitationem amet modi repudiandae, dolores tempora blanditiis dolorum expedita aspernatur? Consectetur fugiat, adipisci obcaecati quo soluta nihil neque accusantium magnam? Ipsum ipsam perferendis blanditiis excepturi error consequatur minus unde exercitationem? Sunt voluptates unde asperiores doloribus expedita accusamus a consequatur, ipsum officia totam quisquam incidunt omnis obcaecati impedit perspiciatis quibusdam qui delectus iste laudantium natus iusto! Alias quaerat deleniti quae consequuntur molestiae incidunt cum repellat accusantium, numquam vel? Quibusdam voluptatibus ex voluptates commodi in, voluptas, quidem temporibus quas ad perspiciatis illum dolorum quod sapiente maiores voluptatem eos incidunt minima hic nulla. Delectus molestias rerum ea quod neque dolores fugiat placeat explicabo minima iusto architecto, impedit velit ab nostrum. Incidunt, consequatur, non corrupti mollitia in nemo tempore, fuga suscipit est velit at iusto!
      </p>
    </section>


    <section class="article__movies">
      <header class="article__movies-title">3. Sherlock Holmes: A Game of Shadows ( 2011 )</header>
      <img class="article__movies-image" src="<?php echo get_template_directory_uri() . '\inc\media\sherlockgame.webp' ?>" alt="steampunk street" srcset="" />
      <p class="article__movies-description">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa suscipit amet aliquam reprehenderit repellat qui delectus odio sed id, dignissimos tempore commodi ipsam harum, velit ipsa quos. Tempore ad fuga consequatur possimus debitis. Eveniet asperiores cumque ipsa pariatur ipsam quis quas quos voluptate, reiciendis consectetur, aspernatur consequatur esse temporibus quae magni libero numquam officia minus! Ipsum natus quod reprehenderit architecto facilis nesciunt illo maiores ducimus pariatur possimus quas aut placeat adipisci, inventore veritatis doloremque, dolor, eveniet nulla! Esse quos obcaecati eum porro? Pariatur et dolorem aliquid error incidunt ad harum fuga animi, reprehenderit rem eum quia iusto, debitis obcaecati itaque!
      </p>
    </section>


    <section class="article__movies">
      <header class="article__movies-title">4. Back to the Future Part III ( 1990 )</header>
      <img class="article__movies-image" src="<?php echo get_template_directory_uri() . '\inc\media\back.webp' ?>" alt="steampunk street" srcset="" />
      <p class="article__movies-description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic aspernatur tempore ut! Consequuntur culpa facilis sit alias eaque, eveniet excepturi exercitationem provident labore illum laboriosam nulla optio quisquam voluptate rerum, dolorum maxime officia atque temporibus beatae? Pariatur cumque laborum molestiae quis, quasi dolores tempore repudiandae et suscipit harum sunt.
      </p>
    </section>
  </article>

  <script src="bundle.js"></script>
</body>

</html>