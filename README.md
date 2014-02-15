default-drupal
==============

Using Default Drupal
---

I'm going to demonstrate this with a project I'm calling 'KAT' which should be built upon Default Drupal.  First start a new repo with a copy of Default Drupal

```
git clone git@github.com:dorightdigital/default-drupal.git KAT
cd KAT/
rm -rf .git README.md
git init .
git add .
git commit -am "Imported from Default Drupal."
git remote add origin git@github.com:dorightdigital/KAT.git
git push -u origin master
```

Then (optionally) replace default DB credentials with your own.  You'll need to replace:  
* *DEFAULT_DRPAL* with your preferred schema
* *defaultdrupal* with your preferred username
* *dd-demo* with your preferred password

All changes need to be made in both *config/mysql/0.sql* and *web/sites/default/settings.php*.

Once you've done that you can set up thd DB and start PHP (I'm using KAT as my schema in this example):

```
mysql -u root < config/mysql/0.sql
mysql -u root -D KAT < config/mysql/1.sql
cd web && php -S localhost:8000
```

