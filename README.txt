
CONTENTS OF THIS FILE
---------------------

 * Installation profile
 * Extending the profile

INSTALLATION PROFILE
--------------------

Installation profile define additional steps (such as enabling modules,
defining content types, etc.) that run after the base installation provided
by core when Drupal is first installed. This distribution only contain portfolio
profile that is only specific in building portfolio-related website.

Additionally, modules and themes may be placed inside subdirectories in a
specific installation profile such as profiles/portfolio/modules and
profiles/portfolio/themes respectively to restrict their usage to only
sites that were installed with that specific profile.

EXTENDING
---------

If you wish to add additional modules or themes please use the "sites"
directory. It is strongly recommended to not alter the portfolio profile and
instead utilize the "sites" directory for expansion.

Below is the recommended sites structure.

sites
..default
..all
....libraries (3rd party libraries goes here)
....themes (Custom and contrib theme goes here)
....modules
......contrib (Put all the contributed modules here)
......custom (Put all you custom modules here)

