# Generated by Django 2.1.5 on 2020-04-03 13:07

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('IMDS', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='patients',
            name='Age',
            field=models.IntegerField(editable=False),
        ),
    ]
