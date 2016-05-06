# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20150814095648) do

  create_table "django_migrations", force: :cascade do |t|
    t.string   "app",     limit: 255, null: false
    t.string   "name",    limit: 255, null: false
    t.datetime "applied",             null: false
  end

  create_table "migrations", id: false, force: :cascade do |t|
    t.string  "migration", limit: 255, null: false
    t.integer "batch",     limit: 4,   null: false
  end

  create_table "password_resets", id: false, force: :cascade do |t|
    t.string   "email",      limit: 255, null: false
    t.string   "token",      limit: 255, null: false
    t.datetime "created_at",             null: false
  end

  add_index "password_resets", ["email"], name: "password_resets_email_index", using: :btree
  add_index "password_resets", ["token"], name: "password_resets_token_index", using: :btree

  create_table "text", force: :cascade do |t|
    t.string "title",   limit: 255
    t.text   "content", limit: 65535
  end

  create_table "text1", force: :cascade do |t|
    t.string   "title",     limit: 255
    t.string   "content",   limit: 255
    t.datetime "createdAt"
    t.datetime "updatedAt"
  end

  create_table "users", force: :cascade do |t|
    t.string   "name",           limit: 255, null: false
    t.string   "email",          limit: 255, null: false
    t.string   "password",       limit: 60,  null: false
    t.string   "remember_token", limit: 100
    t.datetime "created_at",                 null: false
    t.datetime "updated_at",                 null: false
  end

  add_index "users", ["email"], name: "users_email_unique", unique: true, using: :btree

end
