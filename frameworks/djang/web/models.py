from django.db import models


# Create your models here.

class Text(models.Model):
    db_table = 'text'
    title = models.CharField(max_length=255)
    content = models.CharField(max_length=255)
    createdAt = models.DateTimeField('date published')
    updatedAt = models.DateTimeField('date published')

    class Meta:
        db_table = "text"
