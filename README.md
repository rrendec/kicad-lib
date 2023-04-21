kicad-lib
=========

This is my personal [KiCad](https://www.kicad.org/) library of symbols and
footprints.

These are meant to be used as project specific libraries, by making this repo a
Git submodule or simply creating a symlink. I prefer the latter, for the
following reasons:
* To avoid duplication of the local Git repos and working copies and to avoid
  synchronizing changes between them.
* To avoid hard-coding the submodule URL into other projects that use the
  library.
* Changes are mostly incremental: usually, new symbols are added and very rarely
  existing symbols are modified. Even if they are modified, when a symbol from a
  library is used in a project, KiCad makes a local copy of the symbol in the
  project, and therefore it's not a problem if the (shared) library is modified
  externally from a different project.

Typically, I create a symlink from `lib` within each project to `../kicad-lib`.

Symbol library names overlap with global library names. However, KiCad does not
support having multiple libraries with the same name in the same project, and
the project specific library shadows the global library, i.e. only the parts in
the project specific library will show up in the Choose Symbol window under that
particular library. To circumvent that, I prepend a `_` character to the library
name when I add it to the project. For example, this is what the Project
Specific Libraries tab looks like in my Symbol Libraries dialog (Preferences ->
Manage Symbol Libraries...):

| Active | Nickname    | Library Path                        | Library Format |
|--------|-------------|-------------------------------------|----------------|
| [x]    | \_Connector | ${KIPRJMOD}/lib/Connector.kicad_sym | KiCad          |
| [x]    | \_Module    | ${KIPRJMOD}/lib/Module.kicad_sym    | KiCad          |
