from django.core.urlresolvers import reverse
from django.shortcuts import render, get_object_or_404
from web.models import Text
from django.http import HttpResponseRedirect


# Create your views here.

def index(request):
    texts = Text.objects.all()[:3000]
    return render(request, 'index.html', {
        'texts': texts,
    })
