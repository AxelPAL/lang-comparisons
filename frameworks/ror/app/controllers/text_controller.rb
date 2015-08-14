class TextController < ApplicationController
  def index
    @texts = Text.paginate(:page => params[:page], :per_page => 3000)
  end
end
