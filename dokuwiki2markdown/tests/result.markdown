DokuWiki supports **bold**, *italic*, __underlined__ and `monospaced` texts.
Of course you can ***`combine`*** all these.

Internal links are created by using square brackets. You can either just give
a [pagename](pagename) or use an additional [link text](pagename).
Wiki pagenames are converted to lowercase automatically, special characters are not allowed.

You can use [namespaces](some/namespaces) by using a colon in the pagename.
For details about namespaces see namespaces. [some title](some/namespaces)

# Headline Level 1 #
## Headline Level 2 ##
### Headline Level 3 ###
#### Headline Level 4 ####
##### Headline Level 5 #####

Images and Other Files

{{wiki:dokuwiki-128.png}}
{{http:*github.github.com/github-flavored-markdown/images/gfm.png}}

Lists

  * This is a list
  * The second item
    * You may have different levels
  * Another item

test

  - The same list but ordered
  - Another item
    - Just use indention for deeper levels
  - That's it

Quoting

> No we shouldn't

> > Well, I say we should

No Formatting

<nowiki>
This is some text which contains addresses like this: http:*www.splitbrain.org and **formatting**, but nothing is done with it.
</nowiki>
The same is true for %%*__this__ text* with a smiley ;-)%%.

Code Blocks

    one line

<code php>
This is preformatted code all spaces are preserved: like       <-this
  foo
    bar
</code>
