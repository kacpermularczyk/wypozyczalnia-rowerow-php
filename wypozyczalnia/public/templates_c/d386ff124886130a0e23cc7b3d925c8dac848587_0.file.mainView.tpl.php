<?php
/* Smarty version 4.3.2, created on 2024-06-04 14:54:52
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\mainView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665f0e9c3ada00_43669430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd386ff124886130a0e23cc7b3d925c8dac848587' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\mainView.tpl',
      1 => 1716833580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665f0e9c3ada00_43669430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_493346672665f0e9c39abd3_89864636', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1665122529665f0e9c3a05d8_97213623', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_907975134665f0e9c3a4c50_20411382', 'galery');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_493346672665f0e9c39abd3_89864636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_493346672665f0e9c39abd3_89864636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Inner -->
<div class="inner">
    <header>
        <h1><a href="" id="logo"><?php echo (($tmp = $_smarty_tpl->tpl_vars['firstTitle']->value ?? null)===null||$tmp==='' ? "Title" ?? null : $tmp);?>
</a></h1>
        <hr />
        <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['secondTitle']->value ?? null)===null||$tmp==='' ? "description" ?? null : $tmp);?>
</p>
    </header>
    <footer>
        <a href="#jumpHere" class="button circled scrolly">Start</a>
    </footer>
</div>

<?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_1665122529665f0e9c3a05d8_97213623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1665122529665f0e9c3a05d8_97213623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">

<div class="row gtr-200">
    <div class="col-8 col-12-mobile" id="content">
        <article id="main">
            <header>
                <h2><a href="">Kim jesteśmy?</a></h2>
                <p>
                    Wypożyczalnia mieści się w Sosnowcu na ulicy Ulicowskiej 5.
                </p>
            </header>
            <a href="" class="image featured"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/street.jpg" alt="" /></a>
            <p>
                Nasza oferta obejmuje różne typy rowerów, od górskich do wypożyczalni rowerów miejskich. Wypożyczalnia rowerów jest idealnym rozwiązaniem dla tych, którzy chcą wypróbować nowy sposób podróży, czyli jazdą na rowerze. Nasza wypożyczalnia rowerów oferuje komfortowe i bezpieczne korzystanie z rowerów, które są regularnie serwisowane i utrzymywane w odpowiednim stanie. Dzięki naszej wypożyczalni możesz również zdobyć wiedzę o najlepszych trasach i najciekawszych punktach w mieście. Nasze ekipy obsługi są gotowe pomóc w przypadku jakichkolwiek problemów lub pytania.
            </p>
            <section>
                <header>
                    <h3>Oferta</h3>
                </header>
                <p>
                    Nasza wypożyczalnia rowerów oferuje również różne typy usług, które mogą pomóc Ci w wyborze najlepszego rozwiązania dla Twoich potrzeb. Oferujemy wypożyczenie rowerów na godziny, cały dzień lub nawet na kilka dni. W naszej wypożyczalni możesz również zdobyć wiedzę o najlepszych trasach i najciekawszych punktach w mieście, aby mogli Państwo bardziej swobodnie korzystać z naszych rowerów.

                    W naszej ofercie znajdziesz również różne dodatkowe usługi, takie jak wypożyczenie narzędzi i akcesoriów do rowerów, aby mogli Państwo dokładnie sprawdzić swoją cyklizację. Nasza wypożyczalnia rowerów jest również otwarta przez cały rok, co oznacza, że możesz wypłynąć na rowerze niezależnie od pory roku.
                </p>
                <p>
                    Jeśli szukasz nowego sposobu podróży i chcesz zacząć korzystać z rowerem, to nasza wypożyczalnia jest idealnym rozwiązaniem dla Ciebie. Dzięki naszej wypożyczalni możesz zdobyć nowe doświadczenie i zapamiętać szczególne chwile na swoim rowerze.
                </p>
            </section>
            <section>
                <header>
                    <h3>Infomracje kontaktowe</h3>
                </header>
                <p>
                    Jesteśmy aktywni na social mediach, gdzie często umiesczamy różne posty, aby zapoznać się z naszymi aktualnymi informacjami i ofertami. Możesz również skontaktować się z nami za pomocą poczty elektronicznej, wysyłając wiadomość na adres wypozyczalniaSU5@gmail.com. Jeśli preferujesz rozmowę telefoniczną, możesz dzwonić do nas na numer 123-456-789. Nasza recepcja jest otwarta codziennie, aby pomóc Ci w Twoich potrzebach. Kontaktując się z nami, możesz uzyskać więcej informacji o naszym przedsiębiorstwie i ofertach.
                </p>
            </section>
        </article>
    </div>
    <div class="col-4 col-12-mobile" id="sidebar">
        <hr class="first" />
        <section>
            <header>
                <h3><a href="">Jak zarezerwować rower</a></h3>
            </header>
            <p>
                Aby to zrobić najpierw musisz się zalogować lub jeśli nie masz konta zarejestrować. Następnie przejdź do zakładki rezerwacje (będzie aktywna dopiero po zalogowaniu). Wybierz rower i termin który Ci opdowiada. Możesz się zalogować klikając odpowiednią zakładkę w górnym menu.
            </p>
            <footer>
                <a href="#jumpHere3" class="button circled scrolly" class="button">Nasza oferta</a>
            </footer>
        </section>
        <hr />
        <section>
            <header>
                <h3><a href="">Opinie klientów</a></h3>
            </header>
            <p>
                Mieliśmy klientów niemal z całej Polski poniżej kilka wybranych opini.
            </p>
            <div class="row gtr-50">
                <div class="col-4">
                    <a href="" class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/user.png" alt="" /></a>
                </div>
                <div class="col-8">
                    <h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['person1']->value ?? null)===null||$tmp==='' ? "person1" ?? null : $tmp);?>
</h4>
                    <p>
                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['description1']->value ?? null)===null||$tmp==='' ? "description1" ?? null : $tmp);?>

                    </p>
                </div>
                <div class="col-4">
                    <a href="" class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/user.png" alt="" /></a>
                </div>
                <div class="col-8">
                    <h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['person2']->value ?? null)===null||$tmp==='' ? "person2" ?? null : $tmp);?>
</h4>
                    <p>
                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['description2']->value ?? null)===null||$tmp==='' ? "description2" ?? null : $tmp);?>

                    </p>
                </div>
                <div class="col-4">
                    <a href="" class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/user.png" alt="" /></a>
                </div>
                <div class="col-8">
                    <h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['person3']->value ?? null)===null||$tmp==='' ? "person3" ?? null : $tmp);?>
</h4>
                    <p>
                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['description3']->value ?? null)===null||$tmp==='' ? "description3" ?? null : $tmp);?>

                    </p>
                </div>
                <div class="col-4">
                    <a href="" class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/user.png" alt="" /></a>
                </div>
                <div class="col-8">
                    <h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['person4']->value ?? null)===null||$tmp==='' ? "person4" ?? null : $tmp);?>
</h4>
                    <p>
                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['description4']->value ?? null)===null||$tmp==='' ? "description4" ?? null : $tmp);?>

                    </p>
                </div>
                <div class="col-4">
                    <a href="" class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/user.png" alt="" /></a>
                </div>
                <div class="col-8">
                    <h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['person5']->value ?? null)===null||$tmp==='' ? "person5" ?? null : $tmp);?>
</h4>
                    <p>
                        <?php echo (($tmp = $_smarty_tpl->tpl_vars['description5']->value ?? null)===null||$tmp==='' ? "description5" ?? null : $tmp);?>

                    </p>
                </div>
            </div>
            <footer>
                <a href="#jumpHere2" class="button circled scrolly" class="button" >Nasze social media</a>
            </footer>
        </section>
    </div>
</div>
</div>

<?php
}
}
/* {/block 'main'} */
/* {block 'galery'} */
class Block_907975134665f0e9c3a4c50_20411382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'galery' => 
  array (
    0 => 'Block_907975134665f0e9c3a4c50_20411382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Carousel -->
<header id="jumpHere3">
    <h3 id="toCenter">Najczęściej wybierane rowery</h3>
</header>
<section class="carousel">
    <div class="reel">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bikes']->value, 'b');
$_smarty_tpl->tpl_vars['b']->index = -1;
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
$_smarty_tpl->tpl_vars['b']->index++;
$__foreach_b_0_saved = $_smarty_tpl->tpl_vars['b'];
?>
        <article>
            <a href="" class="image featured"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/<?php echo $_smarty_tpl->tpl_vars['b']->value["picture"];?>
" alt="" /></a>
            <header>
                <h3><a href=""><?php echo $_smarty_tpl->tpl_vars['b']->value["model"];?>
 (<?php echo $_smarty_tpl->tpl_vars['b']->value["type"];?>
) - <?php echo $_smarty_tpl->tpl_vars['b']->value["price"];?>
</a></h3>
            </header>
            <?php if ($_smarty_tpl->tpl_vars['b']->index == 9) {?>
                <?php break 1;?>
            <?php }?>
        </article>
        <?php
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section>

<?php
}
}
/* {/block 'galery'} */
}
