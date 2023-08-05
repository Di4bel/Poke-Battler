git pull 
> Dateien von github laden

git log 
> commits nachschauen

git status
> derzeitige Änderungen anschauen

git stash
> Änderungen werden abgespeichert, aber der Stand wird zurückgesetzt. Die Änderungen werden lokal abgespeichert und mit git stash list aufrufbar

> mit git stash pop können die Änderungen wieder eingespielt werden. 

## vor einem git pull immer schauen:
> git status
> bei Änderungen:
>> git stash
>> 
>> git pull
>> 
>> git stash pop
>
> ohne Änderungen:
>> einfach git pull

## Änderungen Comitten

git add (FILENAME oder *)

git reset (FILENAME oder *)

> -> gestaged Dateien entfernen (gestaged = wurde mit git add durchgeführt)
> 
> kann man mit git status anschauen

git commit -m "MESSAGE"
> -> Commit lokal auf dem Rechner
git push
> -> Commit aufs Github übertragen
