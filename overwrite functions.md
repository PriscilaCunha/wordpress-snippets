Overwrite functions from parent themes or plugins / Sobrescrever funções de temas pai ou plugins
-----

**1. Pluggable functions / Funções conectáveis**

If the original function is similar to:  
Se a função original for similar a:  
```php
if (!function_exists('my_parent_theme_function')) {  
    function my_parent_theme_function() {  
        // Code  
    }  
}  
```

Add this in functions.php  
Adicionar no functions.php  
```php
function my_parent_theme_function() {
    // New Code
}
```
_note: do not change original function name.  
nota: não mudar o nome da função original._  
  
---  
  
**2. Specify higher priority / Especificar prioridade maior**

```php
add_action('after_setup_theme', 'my_child_theme_function', 20);
function my_child_theme_function() {
    // Code of your child theme function
}
```
  
---  
  
**3. Use hooks, actions and filters / Use ganchos, ações e filtros**

Original function:  
Função original:  
```php
add_action('after_setup_theme', 'my_parent_theme_function');
function my_parent_theme_function() {
    // Code of your parent theme function
}
```
  
To overwrite, you need to remove the action:  
Para sobrescrever, é necessário remover a ação:  
```php
add_action('wp_loaded', 'remove_my_parent_theme_function');
function remove_my_parent_theme_function() {
    remove_action('after_setup_theme', 'my_parent_theme_function');
}
```
  
  
_Source: / Fonte: https://mhthemes.com/support/knb/overriding-parent-theme-functions-child-theme-tutorial/_
