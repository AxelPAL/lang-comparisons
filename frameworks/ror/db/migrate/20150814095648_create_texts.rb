class CreateTexts < ActiveRecord::Migration
  def change
    create_table :text do |t|
      t.string :title, limit: 255
      t.text :content
    end
  end
end
