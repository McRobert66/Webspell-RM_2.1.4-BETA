<?php
/**
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*  
 *                                    Webspell-RM      /                        /   /                                                 *
 *                                    -----------__---/__---__------__----__---/---/-----__---- _  _ -                                *
 *                                     | /| /  /___) /   ) (_ `   /   ) /___) /   / __  /     /  /  /                                 *
 *                                    _|/_|/__(___ _(___/_(__)___/___/_(___ _/___/_____/_____/__/__/_                                 *
 *                                                 Free Content / Management System                                                   *
 *                                                             /                                                                      *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @version         Webspell-RM                                                                                                       *
 *                                                                                                                                    *
 * @copyright       2018-2022 by webspell-rm.de <https://www.webspell-rm.de>                                                          *
 * @support         For Support, Plugins, Templates and the Full Script visit webspell-rm.de <https://www.webspell-rm.de/forum.html>  *
 * @WIKI            webspell-rm.de <https://www.webspell-rm.de/wiki.html>                                                             *
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @license         Script runs under the GNU GENERAL PUBLIC LICENCE                                                                  *
 *                  It's NOT allowed to remove this copyright-tag <http://www.fsf.org/licensing/licenses/gpl.html>                    *
 *                                                                                                                                    *
 * @author          Code based on WebSPELL Clanpackage (Michael Gruber - webspell.at)                                                 *
 * @copyright       2005-2018 by webspell.org / webspell.info                                                                         *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 */

$language_array = array(

/* do not edit above this line */

    '_tag_if_wish' => 'tag se lo si desidera, ad esempio.',
    '_tags_retained' => 'vengono mantenuti quando lo si visualizza in seguito.',
    'adding_image' => 'Aggiunta di un\'immagine a un post',
    'all_formating_' => 'Tutta la formattazione utilizzata all\'interno',
    'as_noted_url_' => 'Come indicato nella sezione URL sopra puoi avvolgere un\'immagine in un',
    'back_top' => 'Torna all\'inizio',
    'bb_code_tags_color_size' => 'Per modificare il colore o le dimensioni del testo, è possibile utilizzare i seguenti tag. Tieni presente che il modo in cui viene visualizzato l\'output dipenderà dal browser e dal sistema degli spettatori: ',
    'bb_code_tags_text_syle' => 'BBCode include tag per permetterti di cambiare rapidamente lo stile di base del tuo testo. Questo è ottenuto nei seguenti modi: ',
    'bbcode_guide' => 'Guida BBCode',
    'becomes' => 'diventa',
    'blue' => 'Blue',
    'bold_text' => 'testo in grassetto',
    'can_combine_formatting' => 'Posso combinare i tag di formattazione?',
    'close_tags_is_up_to_you' => 'Non ti consigliamo di generare un sacco di testo simile a questo! Ricordati che spetta a te, il poster per garantire che i tag siano chiusi correttamente. ',
    'creating_links' => 'Creare collegamenti',
    'creating_ordered_list' => 'Creazione di un elenco ordinato',
    'creating_unordered_list' => 'Creazione di un elenco non ordinato',
    'email_me' => 'Inviami un\'email',
    'generating_lists' => 'Generazione liste',
    'good_morning' => 'Buongiorno',
    'great' => 'Fantastico!',
    'hello' => 'Ciao',
    'how_to_change_cs' => 'Come cambiare il colore o la dimensione del testo',
    'how_to_create_biu' => 'Come creare testo in grassetto, corsivo e sottolineato',
    'huge' => 'ENORME!',
    'italic_text' => 'testo in corsivo',
    'linking_another_site' => 'Collegamento ad un altro sito',
    'look_at_me' => 'GUARDAMI!',
    'mr_blobby' => 'Mr. Blobby',
    'o' => 'o',
    'outputting_code' => 'Uscita codice',
    'quoting_outputting_text' => 'Citando e inserendo il testo a larghezza fissa',
    'quoting_replys' => 'Citando il testo nelle risposte',
    'red' => 'Rosso',
    'showing_images' => 'Mostra immagini nei post',
    'small' => 'PICCOLO',
    'text_formatting' => 'Formattazione del testo',
    'text_of_mr_blobby' => 'Il testo scritto da Mr. Blobby andrebbe qui',
    'this_is_some_code' => 'Questo è un codice',
    'this_would_output' => 'questo emetterebbe',
    'underlined_text' => 'testo sottolineato',
    'which_will_output' => 'che verrà visualizzato',
    'will_be' => 'sarà',
    'will_become' => 'diventerà',
    'will_both_output' => 'sarà sia output',
    'will_generally_be' => 'generalmente sarà',
    'would_generate' => 'genererebbe',
    'would_generate_link' => 'Questo genererebbe il seguente link,',
    'would_generate_list' => 'Questo genererebbe il seguente elenco',
    'would_give' => 'darebbe questo è',
    'yellow' => 'Giallo',
    'yes_can_combine' => 'Sì, certo che puoi, ad esempio per attirare l\'attenzione di qualcuno che potresti scrivere:'
);
