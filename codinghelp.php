# prestahsopcodehelp
#code for using languages name instead of languages flag.
<ul>
  {foreach from=$languages key=k item=language name="languages"}
   <li {if $language.iso_code == $lang_iso}class="selected_language"{/if}>
   {if $language.iso_code != $lang_iso}
    {assign var=indice_lang value=$language.id_lang}
    {if isset($lang_rewrite_urls.$indice_lang)}
	 <a href="{$lang_rewrite_urls.$indice_lang|escape:htmlall}" title="{$language.name}">
    {else}
	 <a href="{$link->getLanguageLink($language.id_lang)|escape:htmlall}" title="{$language.name}">
    {/if}
   {/if}
	 {$language.name}
   {if $language.iso_code != $lang_iso}
    </a>
   {/if}
   </li>
  {/foreach}
  </ul>
