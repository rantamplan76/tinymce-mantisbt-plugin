\****************************************************
### English version
[Versión en español más abajo](#versión-en-español)

\****************************************************

# TinyMCE plugin for MantisBT

Copyright (c) 2024 Javi Escartin - https://javiescartin.com

Released under the [MIT license](https://opensource.org/licenses/MIT)

<!-- See the [Changelog](https://github.com/) -->

## Description

Plugin to integer the TinyMCE editor with MantisBT


## Requirements

The plugin is developed on [MantisBT](https://mantisbt.org/) version 2.26.1,
but it had not been tested in earlier versions. If you try it on other versions,
please share your experience with me.

Feel free to explore the plugin and let me know how it goes!

## Installation

1. Download or clone a copy of the [plugin's code](https://github.com/rantamplan76/tinymce-mantisbt-plugin).
2. Copy the plugin to your instalation plugins directory and rename folder as 
TinymceEditor (case sensitive)
3. Edit de file files/tinymceeditor.js
    - Edit the mceSelector array adding the id of all textareas in that you
    want to activate the editor
    ```
    mceSelector = ['#description', '#additional_info', '#bugnote_text']
    ```
4. Activate the plugin in the Plugins Administration Page

## Usage
### TODO

\****************************************************
### Versión en español
\****************************************************

# TinyMCE plugin para MantisBT

Copyright (c) 2024 Javi Escartin - https://javiescartin.com

Distribuido bajo la [MIT license](https://opensource.org/licenses/MIT)

Mira el [registro de cambios](https://github.com/)

## Descripción

Plugin que integra el editor TinyMCE en MantisBT


## Requisitos

El plugin esta desarrollado en [MantisBT](https://mantisbt.org/) version 2.26.1, pero
no esta probado en versiones anteriores. Si lo pruebas en otras versiones, cuentame tu
experiencia.

¡Sientete libre de explorar el plugin y hazme saber como te ha ido!

## Instalación

1. Descarga o clona una copia del [codigo del plugin](https://github.com/rantamplan76/tinymce-mantisbt-plugin).
2. Copia el plugin en el directorio de plugins de tu instalación y renombra la carpeta como 
TinymceEditor (distingue entre mayúsculas y minúsculas).
3. Edita el archivo files/tinymceeditor.js
    - Editar el array mceSelector añadiendo el id de todos los textareas en que desees
    activar el editor:
    ```
    mceSelector = ['#description', '#additional_info', '#bugnote_text']
    ```
4. Activa el plugin en la página de administración de plugins

## Manejo

